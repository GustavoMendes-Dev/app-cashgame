<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Match;
use App\Models\Player;
use App\Models\Start;
use App\Models\Movement;

class MatchController extends Controller
{
    public $matchs;
    public $start;

    public function __construct(Match $matchs, Start $start)
    {
        $this->matchs = $matchs;
        $this->start = $start;
    }
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return
     */
    public function index()
    {
        $matchs = $this->matchs->orderBy('created_at','desc')->get();
        $matchs->load('players');

        return view('matchs', compact('matchs'));
        // return response()->json($matchs);
    }

    public function searchPlayers(Request $request, $id)
    {
        $match = $this->matchs->findOrFail($id);
        
        if($request->ajax()) {
          $output = '';
          $query = $request->get('query');

          if($query != '') {
            $players = $match->players()->where('name', 'like', '%'.$query.'%')->get();
          } else {
            $players = $match->players;
          }

          $total_row = $players->count();

          if($total_row > 0) {
            foreach($players as $player) {
            
              $output .= ('
                <tr>
                  <td>' . $dealer . '</td>
                  <td>' . $player->name . '</td>
                  <td>R$ ' . number_format($player->balance, 2, ',', '.') .'</td>
                  <td class="text-end">
                    <div class="d-flex my-4">
                        <button onclick="AddSellChips(' . $player->id . ')" class="btn btn-sm btn-primary me-2">Fichas</button>
                        <button onclick="CloseSellChips(' . $player->id . ')" class="btn btn-sm btn-danger">
                            <span class="indicator-label">Encerrar</span>
                        </button>
                    </div>
                  </td>
                </tr>
              ');
            }
          } else {
            $output = '
              <tr>
                <td align="center" colspan="4">Nenhum jogador encontrado.</td>
              </tr>
            ';
          }

          $players = array(
            'table_data' => $output,
          );

          return response()->json($players);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = $this->matchs->create([
            'title' => $request['title_match'],
            'status' => 1, // Ativo.
        ]);

        return redirect('/matchs')->with('status', 'Partida cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return 
     */
    public function show($id)
    {
        $match = $this->matchs->findOrFail($id);

        $input = collect($match->movement)->where('type', 0)->sum('value');
        $output = collect($match->movement)->where('type', 1)->sum('value');

        // Lista de Jogadores dentro do modal da partida.
        $players = Player::where(['status' => 0])->get();

        // $result = array_diff(array($players), array($match->players));

        // return response()->json($result[0]); 
        return view('match-details', compact('match', 'players', 'output', 'input')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = $this->matchs->findOrFail($id);
        $match->delete();

        return redirect('/matchs')->with('status', 'Partida excluída com sucesso!');

    }

    public function close(Request $request, $id)
    {
        $match = $this->matchs->findOrFail($id);

        $match->status = 0;
        $match->save();

        return redirect('/matchs')->with('status', 'Partida fechada com sucesso!');
    }

    public function newPlayerInMatch(Request $request, $id) {  
        
        $player = $request['player'];

        if(!$player){
            return back()->withInput()->with('error', 'Você precisa selecionar um jogador.');
        }

        $data = [
          'match_id'  => $id,
          'player_id'  => $player,
        ];

        $new_start = $this->start->create($data);

        if($request['dealer'] == 1){
          $new_start->dealer_id = $player;
          $new_start->save();
        }

        // return response()->json($new_start);
        return back()->withInput()->with('status', 'Jogador adicionado com sucesso!');
    }

    // public function newDealerInMatch(Request $request, $id)
    // {
    //     $match = $this->matchs->findOrFail($id);
    //     $match->dealer = $request['dealer'];
    //     $match->save();

    //     return response()->json($match);

    // }
}
