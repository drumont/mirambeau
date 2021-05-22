<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SallesController extends Controller
{
    public function index()
    {
        return view('salles.salles');
    }
}
