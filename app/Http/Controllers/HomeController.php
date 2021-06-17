<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //C'est le controller pour gerer la page d'acceuil

    public function index(){
        return view('welcome');
    }

    public function acceuil(){
        return view('acceuil');
    }
}
