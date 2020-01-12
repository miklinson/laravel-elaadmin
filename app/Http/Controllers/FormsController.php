<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{

    public function basic()
    {
        return view('forms.basic');
    }

    public function advanced()
    {
        return view('forms.advanced');
    }


}
