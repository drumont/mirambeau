<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    public function index()
    {
        return view('hebergement.privilege');
    }
}
