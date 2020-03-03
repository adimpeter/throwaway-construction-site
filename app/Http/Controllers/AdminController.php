<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use App\Gallery;
use App\GalleryCategory;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
    	$gallery_categories = GalleryCategory::all();
    	$gallery_images = Gallery::all();
    	return view('admin.dashboard', compact('gallery_images', 'gallery_categories'));
    }

    public function storeGallery(Request $request){

    	$request->validate([
    		'gallery_category' => 'required',
    		'gallery_img' => 'required|max:1024'
    	]);

    	$gallery_category = ucwords(strtolower($request->gallery_category));
    	$gallery_img = $request->gallery_img;

    	

    	// save the image uploaded
    	try {

            DB::beginTransaction();
  
            // find or create this gallery category
            $gallery_cat = GalleryCategory::where('id', $gallery_category)->first();
            if(is_null($gallery_cat)){
            	$gallery_cat = GalleryCategory::firstOrCreate([
		    		'category' => $gallery_category,
		    	]);
            }
	    	
  
            // upload music
            $img_path = '/img/gallery/';
            $img_dir = public_path() . $img_path;

           
            // make the dir
            if (!file_exists($img_dir)) {
                File::makeDirectory($img_dir, 0755, true);
            }

            $image_name = 'gallery-' . time() . '.' . $gallery_img->getClientOriginalExtension();
            if($gallery_img->move($img_dir, $image_name)){
            	$gallery_info = [
	                'file_path' => $img_path . $image_name,
	                'gallery_category_id' => $gallery_cat->id,
	            ];
	            
	            Gallery::firstOrCreate($gallery_info);
	  
	            DB::commit();

	            return redirect()->route('admin.dashboard')->with('success', 'upload successfull');
            }
            else{
            	DB::rollback();
	            
	            \Log::error('Unable to create image file.');
	            return redirect()->route('admin.dashboard')->with('error', 'something went wrong');
            }
          } catch (\Exception $e) {
            DB::rollback();
            //dd($e->getMessage());
            //return redirect()->back()->with('error', 'Something went wrong');
            \Log::error('Unable to upload file::' . $e->getMessage());
            return redirect()->route('admin.dashboard')->with('error', 'something went wrong');
          }
    }
}
