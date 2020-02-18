<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;
use App\Tag;
use App\Post_tag;
use DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

	public function getIndex() {
		//instansiasi objek untuk ditampilkan pada index blog di paginate postingannya sebanyak 3
		$posts = Post::orderBy('created_at', 'desc')->paginate(3);
		//instansiasi objek untuk ditampilkan di sidebar_blog
		$categories = Category::all();
		//instansiasi objek untuk ditampilkan di sidebar_blog
		$tags = Tag::all();
		//instansiasi untuk menampilkan postingan pada recent pos di sidebar_blog
		$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();

		return view('blog')->withPosts($posts)->withCategories($categories)->withTags($tags)->withBlogs($blogs);
	}

    public function getSingle($slug) {
    	// fetch from the DB based on slug
			$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	$post = Post::where('slug', '=', $slug)->first();
			$categories = Category::all();
			$tags = Tag::all();

    	// return the view and pass in the post object
    	return view('blog.single')
							->withPost($post)
							->withCategories($categories)
							->withTags($tags)
							->withBlogs($blogs);
    }

		public function getCategories($category) {
			// instansiasi objek dengan kondisi postingan berdasarkan id category yang dipilih
			$kategoris = Post::where('category_id', '=', $category)->orderBy('created_at', 'desc')->paginate(3);
			$apel = Category::where('id', '=', $category)->first();
			$categories = Category::all();
			//instansiasi objek untuk ditampilkan di sidebar_blog
			$tags = Tag::all();
			//instansiasi untuk menampilkan postingan pada recent pos di sidebar_blog
			$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();

			return view('TampilberdasarkanCategory')
							->withKategoris($kategoris)
							->withCategories($categories)
							->withTags($tags)
							->withBlogs($blogs)
							->withApel($apel);
		}

		public function getTags($tag_id) {
			// instansiasi objek dengan kondisi postingan berdasarkan id tag yang dipilih
			$tautans = DB::table('posts')
											->join('post_tag', 'posts.id', '=', 'post_tag.post_id')
											->select('posts.*', 'posts.title', 'posts.body', 'posts.slug', 'posts.image', 'posts.created_at')
											->where('tag_id', '=', $tag_id)
											->get();


			$categories = Category::all();
			//instansiasi objek untuk ditampilkan di sidebar_blog
			$tags = Tag::all();

			$tak = Tag::where('id', '=', $tag_id)->first();
			//instansiasi untuk menampilkan postingan pada recent pos di sidebar_blog
			$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();

			return view('Tampil_berdasar_Tags')
							->withTautans($tautans)
							->withCategories($categories)
							->withTags($tags)
							->withBlogs($blogs)
							->withTak($tak);
		}
}
