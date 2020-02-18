<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;
use App\Post;
use App\Category;
use App\Tag;
use App\Post_tag;
use DB;
use App\Http\Controllers\Controller;

class ServiceControllerTampil extends Controller
{

	public function getIndex() {
		$services = Service::orderBy('created_at', 'desc')->paginate(4);
		$categories = Category::all();
		//instansiasi objek untuk ditampilkan di sidebar_blog
		$tags = Tag::all();
		//instansiasi untuk menampilkan postingan pada recent pos di sidebar_blog
		$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();

		return view('services')
						->withServices($services)
						->withCategories($categories)
						->withTags($tags)
						->withBlogs($blogs);
	}

    public function getSingle($id) {
			$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	$service = Service::where('id', '=', $id)->first();
			$categories = Category::all();
			$tags = Tag::all();

    	// return the view and pass in the post object
    	return view('service_single')
							->withService($service)
							->withCategories($categories)
							->withTags($tags)
							->withBlogs($blogs);
    }
}
