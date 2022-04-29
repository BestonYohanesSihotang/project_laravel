<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestonController extends Controller
{
    public function index()
    {
        return view('BESTON.index');
    }
    public function index_next()
    {
        return view('BESTON.index_next');
    }
}
