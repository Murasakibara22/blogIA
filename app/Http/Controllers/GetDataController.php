<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetDataController extends Controller
{
    function index_home()  {
        return view('pages.index');
    }
}
