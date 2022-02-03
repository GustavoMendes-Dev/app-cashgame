<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use App\Models\Movement;
use App\Models\Player;
use App\Models\Start;
use App\Models\Match;

class MovementController extends Controller
{
    public $movements;

    public function __construct(Movement $movements)
    {
        $this->movements = $movements;
    }

    public function matchs(){
        $matchs = Match::where('status', 1)->get();
        return $matchs;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = $this->movements->orderBy('created_at','desc')->get();

        $matchs = $this->matchs();
        
        $inputTotal = collect($movements)->where('type', 0)->sum('value');
        $outputTotal = collect($movements)->where('type', 1)->sum('value');
        $toReceive = collect($movements)->where('payment', 4)->sum('value');

        $filterByDate = $movements->where('created_at', "2022-01-21 22:13:43");
        $filterByStatus = $filterByDate->where('status', 0);

        return view('movements', compact('movements', 'inputTotal', 'outputTotal', 'toReceive', 'matchs'));
    }

    /**
     * Sell ​​chips to a player.
     *
     * @return \Illuminate\Http\Response
     */
    public function sellchips(Request $request, $id)
    {
        $validated = $request->validate([
            'value' => 'required',
            'payment' => 'required',
        ]);

        $player = $request['player_id'];

        $pending = Player::FindOrFail($player);

        $start = Start::where('match_id', $id)->get();
        
        // if($start) {
        //     $start = Start::create([
        //         'match_id'  => $match,
        //         'player_id'  => $player,
        //     ]);
        // }

        $sell = $this->movements->create([
            'description' => "Compra de Fichas " . $pending->name,
            'type' => 0, // Entrada.
            'value' => $request['value'],
            'payment' => $request['payment'],
            'status' => 0, // Por padrão é "Pago".
            'match_id' => $id,
        ]);

        // Se o pagamento for Fiado, o status muda para À receber.

        if($request['payment'] == 4){
            $sell->status = 1;
            $sell->save();

            $current = $pending->balance - $request['value'];
            $pending->update(['balance' => $current]);
        };

        // return response()->json($pending);
        return back()->withInput()->with('status', 'Fichas adicionadas para ' . $pending->name . ' com sucesso!');
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function closesellchips(Request $request, $id)
    {
        $player = $request['player_id'];
        $pending = Player::FindOrFail($player);

        if($request['amount_paid'] > 0) {

            $sell = $this->movements->create([
                'description' => "Encerramento " . $pending->name,
                'status' => 0, // Por padrão é "Pago".
                'type' => 1, // Saída
                'value' => $request['amount_paid'],
                'payment' => $request['payment'],
                'match_id' => $id,
            ]);

        }

        if($request['buy_chips'] > 0) {

            $closeSell = $this->movements->create([
                'description' => "Entrada de fichas do jogador " . $pending->name,
                'value' => $request['buy_chips'],
                'payment' => 10,
                'type' => 0, // Entrada.
                'status' => 0, // Por padrão é "Pago".
                'match_id' => $id,
            ]);
        } 

        $pending->update(['balance' => $request['current_balance']]);

        return back()->withInput()->with('status', 'Jogador ' . $pending->name . ' encerrado com sucesso!');

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
        $type = $request['type'];

        $sell = $this->movements->create([
            'type' => $type, // Entrada ou saída.
            'description' => $request['description'],
            'value' => $request['value'],
            'payment' => $request['payment'],
            'status' => 0, // Por padrão é "Pago".
            'match_id' => $request['match'],
        ]);

        return back()->withInput()->with('status', 'Movimento de cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $movement = $this->movements->findOrFail($id);
        $movement->delete();

        return redirect('/movements')->with('status', 'Lançamento excluído com sucesso!');
    }
}
