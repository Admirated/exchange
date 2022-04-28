<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\Get;

class HomeController extends Controller
{
    public function showPage(){
        $tokens = Token::get();
        $get = Get::get();
        $jsonFrom = [];
        $jsonGet = [];
        foreach($tokens as $token){
            $jsonFrom["$token->id"] = [
                'id' => $token->id,
                'sign' => $token->symbol,
                'name' => $token->name,
                'icon' => $token->logo,
                'rate' => 0,
                'reserve' => 0,
                'placeholder' => "Номер кошелька " . $token->symbol,
                'min' => 0
            ];
        }

        foreach($get as $token){
            $jsonGet["$token->id"] = [
                'id' => $token->id,
                'sign' => $token->symbol,
                'name' => $token->name,
                'icon' => $token->logo,
                'rate' => 0,
                'reserve' => 0,
                'placeholder' => "Номер кошелька " . $token->symbol,
                'min' => 0
            ];
        }

        return view('welcome')->with(['tokens' => $tokens, 'get' => $get, 'jsonFrom' => $jsonFrom, 'jsonGet' => $jsonGet]);
    }
}
