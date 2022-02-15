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
    public $matchs;
    public $players;
    public $movements;

    public function __construct(Match $matchs, Player $players, Movement $movments)
    {
      $this->$matchs = $matchs;
      $this->$players = $players;
      $this->$movments = $movments;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchs = $this->matchs->all(['id'])->count();
        $players = $this->players->all(['id'])->count();
        $movements = $this->movements->orderBy('created_at','desc')->get();
        
        $inputTotal = collect($movements)->where('type', 0)->sum('value');
        $outputTotal = collect($movements)->where('type', 1)->sum('value');

        $total = $inputTotal - $outputTotal;

        return view('dashboard', compact('matchs', 'players', 'total'));
    }

}
