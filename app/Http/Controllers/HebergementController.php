<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HebergementController extends Controller
{
    public function index()
    {
        return view('hebergement.hebergement');
    }
}
