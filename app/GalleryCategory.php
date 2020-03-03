<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
	protected $fillable = [
		'category',
	];

    public function gallery(){
    	return $this->hasOne('App\Gallery');
    }
}
