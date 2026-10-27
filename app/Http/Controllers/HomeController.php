<?php

namespace App\Http\Controllers;

use App\Models\PlantHerb;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('about-us');
    }
    public function contact()
    {
        return view('contact');
    }
}
