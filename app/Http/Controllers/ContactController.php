<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use Session;
use Purifier;
use Image;
use DB;

class ContactController extends Controller
{
  public function __construct() {
      //
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $states = DB::table("demo_state")->lists("name","id");

      return view('Contacts')->withStates($states);
  }

  public function myformAjax($id)
    {
        $states = DB::table("demo_state")->lists("name","id");

        $cities = DB::table("demo_cities")
                    ->where("state_id",$id)
                    ->lists("name","id");
        return json_encode($cities);
    }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('Contacts');
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

      $states = DB::table("demo_state")->lists("name","id");

      $this->validate($request, array(
              'name'         => 'required|max:255',
              'e_mail'       => 'required',
              'phone_number' => 'required',
              'body'         => 'required'
          ));

      // store in the database
      $contact = new Contact;

      $contact->name = $request->name;
      $contact->e_mail = $request->e_mail;
      $contact->phone_number = $request->phone_number;
      $contact->wilayah = $request->state;
      $contact->daerah = $request->city;
      $contact->body = Purifier::clean($request->body);

      $contact->save();

      Session::flash('success', 'The blog post was successfully save!');

      return view('Contacts')->withStates($states);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

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

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {

  }
}
