<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(){
        return view('home');
    }

    function project(){
        return view('project');
    }
}
