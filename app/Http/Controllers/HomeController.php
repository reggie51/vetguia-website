<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_type == 'admin') {
            return view('home');
        }else{
            //$turnos = Mt01turn::all();
            //$cencos = Mt01ceco::all();
            //$tecnicos = Mt01tecn::all();
            //$articulos = En01arti::all();
            //$fallas = Mt01falla::all();

            //return view('home', compact('turnos', 'cencos', 'tecnicos', 'articulos', 'fallas'));
            return view('welcome');
        }

        
    }
}
