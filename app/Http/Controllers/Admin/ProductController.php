<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Cloudinary\Api\Upload\UploadApi;

class ProductController extends Controller
{
    // ===============================
    // LIST PRODUK
    // ===============================
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('admin.product.index', compact('products'));
    }

    // ===============================
    // FORM TAMBAH PRODUK
    // ===============================
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    // ===============================
    // SIMPAN PRODUK
    // ===============================
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'name',
            'category_id',
            'price',
            'description',
        ]);

        // PRODUK UNGGULAN
        $data['is_featured'] = $request->has('is_featured');

        // UPLOAD IMAGE
        $uploaded = (new UploadApi())->upload(
    $request->file('image')->getRealPath(),
    ['folder' => 'products']
);

$product->image = $uploaded['secure_url'];
    }

    // ===============================
    // FORM EDIT PRODUK
    // ===============================
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    // ===============================
    // UPDATE PRODUK
    // ===============================
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'        => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only([
            'name',
            'category_id',
            'price',
            'description',
        ]);

        // PRODUK UNGGULAN
        $data['is_featured'] = $request->has('is_featured');

        // UPLOAD IMAGE BARU
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil diperbarui');
    }

    // ===============================
    // HAPUS PRODUK
    // ===============================
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil dihapus');
    }
}
