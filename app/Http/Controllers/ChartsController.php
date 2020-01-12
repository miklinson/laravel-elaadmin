<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartsController extends Controller
{

    public function chartJs()
    {
        return view('charts.chart-js');
    }

    public function flot()
    {
        return view('charts.flot');
    }

    public function peity()
    {
        return view('charts.peity');
    }


}
