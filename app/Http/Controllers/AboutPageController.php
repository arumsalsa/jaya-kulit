<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AboutGallery;

class AboutPageController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();

        return view('user.about', [
            'about' => $about,
            'galleries' => AboutGallery::all(),
            'metaTitle' => 'Tentang Jaya Kulit – Kerajinan & Reparasi Kulit',
            'metaDescription' => $about
                ? substr(strip_tags($about->story), 0, 160)
                : 'Jaya Kulit adalah toko kerajinan dan reparasi kulit berkualitas.'
        ]);
    }
}
