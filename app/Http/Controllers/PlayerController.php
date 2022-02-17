<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class PlayerController extends Controller
{
    public $players;

    public function __construct(Player $players)
    {
        $this->players = $players;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = $this->players->all();

        return view('players', compact('players'));
    }

    /**
     * Listagem de jogadores para modal de adicionar jogador à partida.
     *
     * @return \Illuminate\Http\Response
     */
    public function listPlayers(Request $request)
    {
        if($request->ajax()) {
          $output = '';
          $query = $request->get('query');

          if($query != '') {
            $list_players = $this->players->where('name', 'like', '%'.$query.'%')
                                          ->orWhere('nickname', 'like', '%'.$query.'%')->get();
          } else {
            $list_players = $this->players->all();;
          }

          $total_row = $list_players->count();

          if($total_row > 0) {
            foreach($list_players as $player) {
              
              $output .= ('
                <tr>
                  <td>' . $player->name . ' - ' . $player->nickname . '</td>
                  <td class="text-end">
                  <div>
                      <label>
                        <input type="radio" class="btn-check" name="player" value="'. $player->id  .'">
                        <span class="btn btn-light btn-active-primary btn-sm btn-color-muted btn-active">Selecionar</span>
                      </label>
                      <label>
                        <input type="radio" class="btn-check" name="dealer" value="1">
                        <span class="btn btn-light btn-active-primary btn-sm btn-color-muted btn-active">Dealer</span>
                      </label>
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

        $list_players = array(
          'table_data' => $output,
        );

        return response()->json($list_players);
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
        $new_player = $request->all();
        $this->players->create($new_player);

        return redirect('/players')->with('status', 'Jogador cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = $this->players->findOrFail($id);
        $player->dealer;

        return view('player-details', compact('player'));
        // return response()->json($player);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setPlayer($id)
    {
        $player = $this->players->findOrFail($id);

        return response()->json($player);

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
        $player = $this->players->findOrFail($id);

        $data = $request->all();

        // dd($data);

        if ($player) {
          $player->update($data);
        }

        return redirect('/players')->with('status', 'Jogador atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = $this->players->findOrFail($id);
        $match->delete();

        return redirect('/players')->with('status', 'Jogador excluído com sucesso!');
    }
}
