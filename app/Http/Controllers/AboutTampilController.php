<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\About;

class AbouttampilController extends Controller
{

	public function getIndex() {
		$about = About::orderBy('created_at', 'desc')->first();

		return view('about')->withAbout($about);
	}

    public function getSingle($title) {
    	// fetch from the DB based on slug

    }
}
