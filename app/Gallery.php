<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Gallery extends Model
{
	protected $fillable = [
		'file_path',
		'gallery_category_id',
	];
    public function galleryCategory(){
    	return $this->belongsTo('App\GalleryCategory');
    }
}
