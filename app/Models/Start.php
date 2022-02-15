<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Start extends Model
{
    use HasFactory;

    protected $table = 'foreign_match_players';

    protected $fillable = ['match_id', 'player_id', 'dealer_id'];

    public function match(): HasMany
    {
        return $this->hasMany(Match::class, 'match_id', 'id');
    }

    public function players(): HasMany
    {
        return $this->hasMany(Player::class, 'player_id', 'id');
    }
}
