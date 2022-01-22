<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
class Matchs extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'matches';

       protected $fillable = [
        'match_name',
        'host_name',
        'guest_name',
        'user_id ',
        'date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function player(){

        return $this->belongsToMany(Player::class,'matches_players','match_id','player_id');

     }


}
