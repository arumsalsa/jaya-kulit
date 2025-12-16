<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\AboutGallery;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index', [
            'about' => AboutUs::first(),
            'galleries' => AboutGallery::all()
        ]);
    }

    public function update(Request $request)
{
    $about = AboutUs::first();

    if (!$about) {
        $about = new AboutUs();
    }

    $about->story = $request->story;
    $about->instagram = $request->instagram;
    $about->whatsapp = $request->whatsapp;
    $about->maps_embed = $request->maps_embed ?? null;

    $about->save();

    return back()->with('success', 'About Us berhasil diperbarui');
}


    public function uploadGallery(Request $request)
{
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('about', 'public');
            AboutGallery::create(['image' => $path]);
        }
    }

    return back();
}


    public function deleteGallery($id)
    {
        AboutGallery::findOrFail($id)->delete();
        return back();
    }
}
