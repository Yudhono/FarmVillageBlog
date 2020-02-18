<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\About;
use Session;
use Purifier;
use Image;

class AboutController extends Controller
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
      $abouts = About::orderBy('created_at', 'desc')->paginate(10);
      return view('abouts.index')->with('abouts', $abouts);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('abouts.create');
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
      $about = new About;

      $about->title = $request->title;
      $about->body = Purifier::clean($request->body);

      if ($request->hasFile('featured_img')) {
        $image = $request->file('featured_img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 800, function ($constraint) { $constraint->aspectRatio(); })->save($location);

        $about->image = $filename;
      }

      $about->save();

      Session::flash('success', 'The blog post was successfully save!');

      return redirect()->route('abouts.show', $about->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $about = About::find($id);
      return view('abouts.show')->withAbout($about);
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
      $about = About::find($id);

      // return the view and pass in the var we previously created
      return view('abouts.edit')->withAbout($about);
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
      $about = About::find($id);

      $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required'
          ));

      // Save the data to the database
      $about = About::find($id);

      $about->title = $request->input('title');
      $about->body = Purifier::clean($request->input('body'));

      $about->save();

      // set flash data with success message
      Session::flash('success', 'This post was successfully saved.');

      // redirect with flash data to posts.show
      return redirect()->route('abouts.show', $about->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $about = About::find($id);

      $about->delete();

      Session::flash('success', 'The post was successfully deleted.');
      return redirect()->route('abouts.index');
  }
}
