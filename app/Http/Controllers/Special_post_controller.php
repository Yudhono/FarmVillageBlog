<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Special_post;
use Session;
use Purifier;
use Image;

class Special_post_controller extends Controller
{
  public function __construct() {
      $this->middleware('auth');
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $special_posts = Special_post::orderBy('created_at', 'desc')->paginate(10);
      return view('special_posts.index')->with('special_posts', $special_posts);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('special_posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      // validate the data
      $this->validate($request, array(
              'title'         => 'required|max:255',
              'body'          => 'required'
          ));

      // store in the database
      $special_post = new Special_post;

      $special_post->title = $request->title;
      $special_post->body = Purifier::clean($request->body);

      if ($request->hasFile('featured_img')) {
        $image = $request->file('featured_img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 800, function ($constraint) { $constraint->aspectRatio(); })->save($location);

        $special_post->image = $filename;
      }

      $special_post->save();

      Session::flash('success', 'The blog post was successfully save!');

      return redirect()->route('special_posts.show', $special_post->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $special_post = Special_post::find($id);
      return view('special_posts.show')->withSpecial_post($special_post);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      // find the post in the database and save as a var
      $special_post = Special_post::find($id);

      // return the view and pass in the var we previously created
      return view('special_posts.edit')->withSpecial_post($special_post);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      // Validate the data
      $special_post = Special_post::find($id);

      $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required'
          ));

      // Save the data to the database
      $special_post = Special_post::find($id);

      $special_post->title = $request->input('title');
      $special_post->body = Purifier::clean($request->input('body'));

      $special_post->save();

      // set flash data with success message
      Session::flash('success', 'This post was successfully saved.');

      // redirect with flash data to posts.show
      return redirect()->route('special_posts.show', $special_post->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $special_post = Special_post::find($id);

      $special_post->delete();

      Session::flash('success', 'The post was successfully deleted.');
      return redirect()->route('special_posts.index');
  }
}
