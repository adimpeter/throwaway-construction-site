<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;
use App\GalleryCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gallery_categories = GalleryCategory::all();
        $gallery_images = Gallery::all();
        
        return view('pages.index', compact('gallery_images', 'gallery_categories'));
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function gallery(){
        $gallery_categories = GalleryCategory::all();
        $gallery_images = Gallery::all();
        
        return view('pages.gallery', compact('gallery_images', 'gallery_categories'));
    }
}
