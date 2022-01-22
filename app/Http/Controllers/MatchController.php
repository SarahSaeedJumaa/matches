<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Matchs;
use App\Models\Player;
use App\Models\player_match;
use Illuminate\Support\Facades\Validator;
class MatchController extends Controller
{
     public function createMatch(){

      return view('matches.createMatch');

     }

     public function storeMatch(Request $request){
        $request->validate([
        'match_name'=>'required',
        'host_name'=>'required',
        'guest_name'=>'required'
        ]);
        $match = Matchs::create($request->all());
        return redirect('createMatch')->with('success','playr was added');

    }

    public function getinfo(){


        $plyinfo = Player::with('matches')->get();
        return  view('matches.appear', compact('plyinfo'));


    }




    public function showAll(){
        $players = Player::select('id','name','user_name')->get();
        $matches = Matchs::select('id','match_name')->get();
        return view('matches.attach',compact('players', 'matches'));
    }


public function savePlayrwithMatch(Request $request){

            $validate =validator::make($request->all(),
                                ['player_id'=>'required',
                                'match_id' => 'required']
                           );
    if($validate->fails()){
        return $validate ->errors();
    }
    $player = Player::find($request -> player_id);
    if(!$player)
    return abort('you dont check player ');
    $player->matches()->syncWithoutDetaching($request -> match_id);
    return redirect('attach');
}///attach sync



    public function getAll(){

        $match  = Player::with('matches')->find(id:2);
          return view('matches.home', compact('match'));

   }

}

