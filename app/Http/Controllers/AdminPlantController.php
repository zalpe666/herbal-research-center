<?php

namespace App\Http\Controllers;

use App\Models\PlantHerb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPlantController extends Controller
{
    public function index()
    {
        $plants = PlantHerb::latest()->paginate(10);

        return view('admin.plants.index', compact('plants'));
    }

    public function create()
    {
        return view('admin.plants.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'scientific_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'chemical_content' => 'nullable|string',
            'benefits' => 'nullable|string',
            'usage' => 'nullable|string',
            'side_effects' => 'nullable|string',
            'references' => 'nullable|string',
        ]);

        // Generate slug otomatis dari nama
        $validated['slug'] = Str::slug($request->name);

        // Pastikan slug unik
        $originalSlug = $validated['slug'];
        $counter = 1;

        while (PlantHerb::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('plants', 'public');
        }

        PlantHerb::create($validated);

        return redirect()
            ->route('admin.plants')
            ->with('success', 'Data tanaman berhasil ditambahkan.');
    }

    public function edit(PlantHerb $plant)
    {
        return view('admin.plants.edit', compact('plant'));
    }

    public function update(Request $request, PlantHerb $plant)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'scientific_name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'chemical_content' => 'nullable|string',
            'benefits' => 'nullable|string',
            'usage' => 'nullable|string',
            'side_effects' => 'nullable|string',
            'references' => 'nullable|string',
        ]);

        // Generate slug baru dari nama
        $slug = Str::slug($request->name);

        // Pastikan slug unik, kecuali tanaman yang sedang diedit
        $originalSlug = $slug;
        $counter = 1;

        while (
            PlantHerb::where('slug', $slug)
            ->where('id', '!=', $plant->id)
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        $validated['slug'] = $slug;

        // Upload gambar baru
        if ($request->hasFile('image')) {

            if ($plant->image) {
                Storage::disk('public')->delete($plant->image);
            }

            $validated['image'] = $request->file('image')
                ->store('plants', 'public');
        }

        $plant->update($validated);

        return redirect()
            ->route('admin.plants')
            ->with('success', 'Data tanaman berhasil diperbarui.');
    }

    public function destroy(PlantHerb $plant)
    {
        if ($plant->image) {
            Storage::disk('public')->delete($plant->image);
        }

        $plant->delete();

        return redirect()
            ->route('admin.plants')
            ->with('success', 'Data tanaman berhasil dihapus.');
    }
}
