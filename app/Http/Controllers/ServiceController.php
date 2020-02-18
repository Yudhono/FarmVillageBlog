<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Service;
use Session;
use Purifier;
use Image;

class ServiceController extends Controller
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
      $services = Service::orderBy('created_at', 'desc')->paginate(10);
      return view('services.index')->with('services', $services);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('services.create');
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
      $service = new Service;

      $service->title = $request->title;
      $service->body = Purifier::clean($request->body);

      if ($request->hasFile('featured_img')) {
        $image = $request->file('featured_img');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/' . $filename);
        Image::make($image)->resize(800, 800, function ($constraint) { $constraint->aspectRatio(); })->save($location);

        $service->image = $filename;
      }

      $service->save();

      Session::flash('success', 'The blog post was successfully save!');

      return redirect()->route('services.show', $service->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $service = Service::find($id);
      return view('services.show')->withService($service);
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
      $service = Service::find($id);

      // return the view and pass in the var we previously created
      return view('services.edit')->withService($service);
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
      $service = Service::find($id);

      $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required'
          ));

      // Save the data to the database
      $service = Service::find($id);

      $service->title = $request->input('title');
      $service->body = Purifier::clean($request->input('body'));

      $service->save();

      // set flash data with success message
      Session::flash('success', 'This post was successfully saved.');

      // redirect with flash data to posts.show
      return redirect()->route('services.show', $service->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $service = Service::find($id);

      $service->delete();

      Session::flash('success', 'The post was successfully deleted.');
      return redirect()->route('services.index');
  }
}
