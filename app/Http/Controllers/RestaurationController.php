<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurationController extends Controller
{
    public function index()
    {
        return view('restauration.restauration');
    }
}
