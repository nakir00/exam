<?php

namespace App\Http\Controllers;

use App\Models\SondageFirst;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sondageController extends Controller
{
    public function sondageFirst(){
        return view('sondageFirst');
    }

    public function sondageFirstShow(Request $request){
        $answers=SondageFirst::query()->with('user')->get()->all();
        //mets le nom de la vue qui va afficher le tableau de reponses
        return view('',['reponses'=>$answers]);
    }

    public function sondageFirstStore(Request $request){
        $reponse= $request->input('answer');
        $reponseSondage=SondageFirst::create(['answer'=>$reponse,'user_id'=>Auth::user()->id]);
        return view('dashboard');
    }

    public function sondageSecond(){
        return view('sondageSecond');
    }
}
