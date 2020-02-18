<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Gallery;
use App\Service;
use App\Special_post;
use App\Category;
use App\Tag;
use App\Post_tag;
use Mail;
use Session;
use DB;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		$galleries = Gallery::orderBy('created_at', 'desc')->limit(6)->get();
		$services = Service::orderBy('created_at', 'desc')->limit(4)->get();
		$special_posts = Special_post::orderBy('created_at', 'desc')->limit(2)->get();
		$special_post1 = Special_post::where('id', '=', '3')->first();
		$special_post2 = Special_post::where('id', '=', '2')->first();
		$special_post3 = Special_post::where('id', '=', '1')->first();

		return view('frontend')
						->withGalleries($galleries)
						->withPosts($posts)
						->withServices($services)
						->withSpecial_posts($special_posts)
						->withSpecial_post1($special_post1)
						->withSpecial_post2($special_post2)
						->withSpecial_post3($special_post3);
	}

	public function getSingle($id) {
		$special_post = Special_post::where('id', '=', $id)->first();
		$blogs = Post::orderBy('created_at', 'desc')->limit(4)->get();
		$categories = Category::all();
		$tags = Tag::all();

		return view('special_post_item')
						->withSpecial_post($special_post)
						->withCategories($categories)
						->withTags($tags)
						->withBlogs($blogs);
	}

	public function getAbout() {
		/*$first = 'Alex';
		$last = 'Curtis';

		$fullname = $first . " " . $last;
		$email = 'alex@jacurtis.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;*/
		return view('about');
	}

	public function getGallery() {
		return view('Gallery');
	}

	public function getContact() {
		return view('Contacts');
	}

	public function getBlogpost() {
		return view('blogpost');
	}

	public function getBlog() {
		return view('Blog');
	}

	public function postContact(Request $request) {
		$this->validate($request, [
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:10']);

		$data = array(
			'email' => $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
			);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('hello@devmarketer.io');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your Email was Sent!');

		return redirect('/');
	}


}
