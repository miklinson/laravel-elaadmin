<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{

    public function googleMap()
    {
        return view('maps.google-map');
    }

    public function vectorMap()
    {
        return view('maps.vector-map');
    }


}
