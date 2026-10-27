<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlantHerb;

class HerbalGardenController extends Controller
{
    public function index()
    {
        $plants = PlantHerb::latest()
            ->take(8)
            ->get();

        return view('pages.herbal-garden.index',compact('plants'));

    }
    public function plants(Request $request)
    {
        $query = PlantHerb::query();

        // =========================
        // SEARCH
        // =========================
        if ($request->filled('search')) {
            $search = $request->search;

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('scientific_name', 'like', "%{$search}%")
                    ->orWhere('chemical_content', 'like', "%{$search}%")
                    ->orWhere('benefits', 'like', "%{$search}%")
                    ->orWhere('usage', 'like', "%{$search}%");
            });
        }

        // =========================
        // SORTING
        // =========================
        switch ($request->get('sort')) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;

            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;

            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;

            case 'newest':
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }

        // =========================
        // PAGINATION
        // =========================
        $plants = $query
            ->paginate(8)
            ->withQueryString();

        // =========================
        // STATISTIK
        // =========================
        $totalPlants = PlantHerb::count();

        $totalWithImage = PlantHerb::whereNotNull('image')
            ->where('image', '!=', '')
            ->count();

        $totalWithoutImage = $totalPlants - $totalWithImage;

        return view('pages.herbal-garden.plants', compact(
            'plants',
            'totalPlants',
            'totalWithImage',
            'totalWithoutImage'
        ));
    }
    public function show(PlantHerb $plant)
    {
        return view('pages.herbal-garden.plant-detail', compact('plant'));
    }
}
