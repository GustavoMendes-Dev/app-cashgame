<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use App\Models\Movement;
use App\Models\Player;
use App\Models\Start;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movements = Movement::orderBy('created_at','desc')->get();
        
        $inputTotal = collect($movements)->where('type', 0)->sum('value');
        $outputTotal = collect($movements)->where('type', 1)->sum('value');
        $toReceive = collect($movements)->where('payment', 4)->sum('value');

        $filterByDate = $movements->where('created_at', "2022-01-21 22:13:43");
        $filterByStatus = $filterByDate->where('status', 0);

        return view('movements', compact('movements', 'inputTotal', 'outputTotal', 'toReceive'));
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

        $sell = Movement::create([
            'description' => "Compra de Fichas " . $pending->name,
            'type' => 0, // Entrada.
            'value' => $request['value'],
            'payment' => $request['payment'],
            'status' => 0, // Por padrão é "Pago".
        ]);

        // Se o pagamento for Fiado, o status muda para À receber.

        if($request['payment'] == 4){
            $sell->status = 1;
            $sell->save();

            $current = $pending->balance - $request['value'];
            $pending->update(['balance' => $current]);
        }else{
            $current = $pending->balance + $request['value'];
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
        //
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
        $movement = Movement::findOrFail($id);
        $movement->delete();

        return redirect('/movements')->with('status', 'Lançamento excluído com sucesso!');
    }
}
