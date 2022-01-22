<?php

namespace App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;

class playerController extends Controller
{

    public function create(){

        return view('matches.create');

       }

       public function store(Request $request){
          $request->validate([
          'name'=>'required',
          'user_name'=>'required',
          'def_pos'=>'required',
          'phone'=>'required',
          'email'=>'required'
          ]);
          $player = Player::create($request->all());
          return redirect('create')->with('success','playr was added');
}




   public function appearPlayers(){
    $player =  Player::all();

   return  view('matches.attach',compact('player'));
    //   return  view('matches.home')->with('player');
    }





}
