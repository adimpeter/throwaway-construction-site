<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gallery;
use App\GalleryCategory;
use App\Company;

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
        $company = Company::all()->first();
        $gallery_categories = GalleryCategory::all();
        $gallery_images = Gallery::all();
        
        return view('pages.index', compact('gallery_images', 'gallery_categories', 'company'));
    }

    public function about(){
        $company = Company::all()->first();
        return view('pages.about', compact('company'));
    }

    public function contact(){
        $company = Company::all()->first();
        return view('pages.contact', compact('company'));
    }

    public function gallery(){
        $company = Company::all()->first();
        $gallery_categories = GalleryCategory::all();
        $gallery_images = Gallery::all();
        
        return view('pages.gallery', compact('gallery_images', 'gallery_categories', 'company'));
    }
}
