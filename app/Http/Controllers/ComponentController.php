<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{

    public function buttons()
    {
        return view('components.buttons');
    }

    public function badges()
    {
        return view('components.badges');
    }

    public function tabs()
    {
        return view('components.tabs');
    }

    public function cards()
    {
        return view('components.cards');
    }

    public function alerts()
    {
        return view('components.alerts');
    }

    public function progressbars()
    {
        return view('components.progress-bars');
    }

    public function modals()
    {
        return view('components.modals');
    }

    public function switches()
    {
        return view('components.switches');
    }

    public function grids()
    {
        return view('components.grids');
    }

    public function typography()
    {
        return view('components.typography');
    }

}
