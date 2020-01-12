<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconsController extends Controller
{

    public function fontAwesome()
    {
        return view('icons.font-awesome');
    }

    public function themefyIcons()
    {
        return view('icons.themefy-icons');
    }


}
