<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class SectorController extends Controller
{
    // Class pour la gestion des Sector
    public function show(){

        $sectors = Sector::all();
        return view('sector.show',compact('sectors'));
    }

    public function showadd(){
        return view('sector.showadd');
    }
}