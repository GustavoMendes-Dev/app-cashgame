<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\Player;
use App\Models\Start;
use App\Models\Movement;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchs = Match::all(['id'])->count();
        $players = Player::all(['id'])->count();
        $movements = Movement::orderBy('created_at','desc')->get();
        
        $inputTotal = collect($movements)->where('type', 0)->sum('value');
        $outputTotal = collect($movements)->where('type', 1)->sum('value');

        $total = $inputTotal - $outputTotal;

        return view('dashboard', compact('matchs', 'players', 'total'));
    }

}
