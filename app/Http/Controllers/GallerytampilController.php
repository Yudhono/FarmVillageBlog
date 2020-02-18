<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Gallery;

class GallerytampilController extends Controller
{

	public function getIndex() {
		$galleries = Gallery::orderBy('created_at', 'desc')->limit(20)->get();

		return view('Gallery')->withGalleries($galleries);
	}

    public function getSingle($title) {
    	// fetch from the DB based on slug
			$galleries = Gallery::orderBy('created_at', 'desc')->paginate(5); //order by diganti biar gambar yang tampil di related images random
    	$gallery = Gallery::where('title', '=', $title)->first();

    	// return the view and pass in the post object
    	return view('Gallery_item')->withGalleries($galleries)->withGallery($gallery);
    }
}
