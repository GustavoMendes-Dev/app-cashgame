<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Player;
use App\Models\Start;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return
     */
    public function index()
    {
        $matchs = Match::orderBy('created_at','desc')->get();
        $matchs->load('players');

        return view('matchs', compact('matchs'));
        // return response()->json($matchs);
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
        $match = Match::create([
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
        $match = Match::findOrFail($id);
        $match->load('players');

        // Lista de Jogadores dentro do modal da partida.
        $players = Player::where('status', 0)->get();

        return view('match-details', compact('match', 'players')); 
        // return response()->json($match); 
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
        $match = Match::findOrFail($id);
        $match->delete();

        return redirect('/matchs')->with('status', 'Partida excluída com sucesso!');

    }

    public function close(Request $request, $id)
    {
        $match = Match::findOrFail($id);

        $match->status = 0;
        $match->save();

        return redirect('/matchs')->with('status', 'Partida fechada com sucesso!');
    }

    public function newPlayerInMatch(Request $request, $id) {  
        
        $player = $request['player'];

        if(!$player){
            return back()->withInput()->with('error', 'Você precisa selecionar um jogador.');
        }

        $start = Start::create([
            'match_id'  => $id,
            'player_id'  => $player,
        ]);

        return back()->withInput()->with('status', 'Jogador adicionado com sucesso!');
    }
}
