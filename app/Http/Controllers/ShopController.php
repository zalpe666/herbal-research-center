<?php

namespace App\Http\Controllers;

use App\Models\PlantHerb;

class ShopController extends Controller
{
    public function index()
    {
        $products = PlantHerb::with('variations')
            ->whereHas('variations')
            ->latest()
            ->paginate(12);

        return view('shop.index', compact('products'));
    }

    public function show(PlantHerb $plantHerb)
    {
        $plantHerb->load('variations');

        return view('shop.show', compact('plantHerb'));
    }
}