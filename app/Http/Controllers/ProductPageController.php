<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // SEARCH
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // FILTER CATEGORY
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // FILTER HARGA
if ($request->filled('min_price')) {
    $query->where('price', '>=', $request->min_price);
}

if ($request->filled('max_price')) {
    $query->where('price', '<=', $request->max_price);
}


        return view('user.products.index', [
            'products'   => $query->latest()->paginate(12),
            'categories' => Category::all(),

        ]);
    }
    public function show(Product $product)
{
    return view('user.products.show', compact('product'));
}

}
