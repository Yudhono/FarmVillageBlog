<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Demo_states;
use App\Demo_city;
use Session;
use Purifier;
use Image;
use DB;

class ContactControllerAdmin extends Controller
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
    $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
    $kontak = DB::table('demo_state')
                  ->join('contacts', 'demo_state.id', '=', 'contacts.wilayah')
                  ->join('demo_cities', 'demo_cities.id', '=', 'contacts.daerah')
                  ->select('demo_state.*', 'demo_state.name', 'demo_cities.name')
                  ->get();

    return view('contacts.index')
            ->withContacts($contacts)
            ->withKontak($kontak);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //return view('Contacts');
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

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $contact = Contact::find($id);
    return view('contacts.show')->withContact($contact);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $contact = Contact::find($id);

    return view('contacts.edit')->withContact($contact);
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
    $contact = Contact::find($id);

    $this->validate($request, array(
            'name'         => 'required|max:255',
            'e_mail'       => 'required',
            'phone_number' => 'required',
            'body'  => 'required'
        ));

    // Save the data to the database
    $contact = Contact::find($id);

    $contact->name = $request->input('name');
    $contact->e_mail = $request->input('e_mail');
    $contact->phone_number = $request->input('phone_number');
    $contact->body = Purifier::clean($request->input('body'));

    $contact->save();

    // set flash data with success message
    Session::flash('success', 'This post was successfully saved.');

    // redirect with flash data to posts.show
    return redirect()->route('contacts.show', $contact->id);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $contact = Contact::find($id);

    $contact->delete();

    Session::flash('success', 'The post was successfully deleted.');
    return redirect()->route('contacts.index');
  }
}
