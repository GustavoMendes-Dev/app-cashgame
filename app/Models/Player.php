<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    public $guarded = [];

    public function matchs(): HasMany
    {
        return $this->hasMany(Start::class, 'player_id');
    } 

    public function dealer(): HasOne
    {
        return $this->hasOne(Start::class, 'dealer_id');
    } 

}
