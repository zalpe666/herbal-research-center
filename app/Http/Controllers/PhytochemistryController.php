<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhytochemistryController extends Controller
{

    public function index()
    {
        return view('pages.phytochemistry.index');
    }
}
