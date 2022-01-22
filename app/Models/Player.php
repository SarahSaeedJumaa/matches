<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $fillable = [

        'name',
        'user_name',
        'def_pos',
        'phone',
        'email',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */

    protected $hidden = [

        'remember_token',
        'email_verified_at',
        'pivot',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function matches(){


        return $this->belongsToMany(Matchs::class,'matches_players','player_id','match_id');

     }
}



