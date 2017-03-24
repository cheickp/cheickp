<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapageController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        return view('ma-page');
    }

}
