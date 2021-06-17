<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectorController extends Controller
{
    // Class pour la gestion des Sector
    public function show(){
        return view('sector.show');
    }
}