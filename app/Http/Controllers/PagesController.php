<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function welcome(){
        $eu = ['name'=>'Davi'];
        return view('welcome');
        

    }
    function controller(){
        return view('controller');
    }
    public function amigos()
    {
        $amigos = [
                        ['nome' => 'José Silva', 'idade' => 22],
                        ['nome' => 'Maria José', 'idade' => 20],
                        ['nome' => 'João Pinheiro', 'idade' => 35]
        ];
                
        return $amigos;
    }
    function sobre(){
        return view('sobre',['name' => 'James','age'=>22]);

    }
    function app(){

        return view('app');
    }
    

}
