<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{

    public function basic()
    {
        return view('tables.basic');
    }

    public function data()
    {
        return view('tables.data');
    }


}
