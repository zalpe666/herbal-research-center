<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerbalTestingServicesController extends Controller
{
    public function index()
    {
        return view('pages.herbal-testing-services.index');
    }

    public function extraction()
    {
        return view('pages.herbal-testing-services.extraction');
    }
}
