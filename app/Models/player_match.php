<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class player_match extends Model
{
    use HasFactory ,SoftDeletes;
    protected $table ='matches_players';
    protected $fillable = [
        'player_id',
        'match_id',
        'position_id',

    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];



    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function matche(){

        return $this->belongsTo(Matchs::class);
    }

}
