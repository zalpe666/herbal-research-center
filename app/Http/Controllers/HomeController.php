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
    public function herbalGarden()
    {
        $plants = PlantHerb::latest()
            ->take(8)
            ->get();

        return view('herbal-garden', compact('plants'));
    }
    public function herbalGardenShow(PlantHerb $plant)
    {
        return view('plant-detail', compact('plant'));
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

        return view('plants', compact(
            'plants',
            'totalPlants',
            'totalWithImage',
            'totalWithoutImage'
        ));
    }
}
