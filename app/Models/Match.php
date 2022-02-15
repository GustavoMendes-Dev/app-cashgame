<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Match extends Model
{
    use HasFactory;

    protected $table = 'matchs';

    public $guarded = [];

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class, 'foreign_match_players', 'match_id', 'player_id');
    } 

    public function movement(): HasMany
    {
        return $this->hasMany(Movement::class, 'match_id', 'id');
    } 

}
