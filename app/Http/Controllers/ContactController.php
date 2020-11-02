<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')->get();
        return view('contact.index')->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'title' => 'required',
              'subtitle'=> 'required',
              'address'=> 'required',
              'phone'=> 'required',
              'email'=> 'required'

           ]);
        $contact = new Contact;
        $contact->title=$request->input('title');
        $contact->subtitle=$request->input('subtitle');
        $contact->address=$request->input('address');
        $contact->phone=$request->input('phone');
        $contact->email=$request->input('email');
        $contact->save();

        return redirect('contact')->with('success','Contact Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = Contact::where('id',$id)->first();
        return view('contact.edit',compact('contacts'));
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
        $this -> validate($request,[
            'title' => 'required',
              'subtitle'=> 'required',
              'address'=> 'required',
              'phone'=> 'required',
              'email'=> 'required'

           ]);
        $contact =Contact::find($id);
        $contact->title=$request->input('title');
        $contact->subtitle=$request->input('subtitle');
        $contact->address=$request->input('address');
        $contact->phone=$request->input('phone');
        $contact->email=$request->input('email');
        $contact->save();

        return redirect('contact')->with('success','Contact updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts =Contact::find($id);
        $contacts->delete();
     return redirect('contact')->with('contacts',$contacts);
    }
}
