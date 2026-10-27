<?php

namespace App\Http\Controllers;

use App\Models\Variation;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'variation_id' => ['required', 'exists:variations,id'],
        ]);

        $variation = Variation::with('plantHerb')
            ->findOrFail($request->variation_id);

        $cart = session()->get('cart', []);

        $id = $variation->id;

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'variation_id' => $variation->id,
                'name' => $variation->plantHerb->name,
                'unit' => $variation->unit,
                'price' => $variation->price,
                'image' => $variation->image,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return redirect()
            ->route('cart')
            ->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function remove(Variation $variation)
    {
        $cart = session()->get('cart', []);

        unset($cart[$variation->id]);

        session()->put('cart', $cart);

        return back()->with('success', 'Produk dihapus dari keranjang.');
    }
}