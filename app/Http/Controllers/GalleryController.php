<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illumiante\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at','desc')->get();
        return view('gallery.index')->with('galleries',$galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('gallery');
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
              'serialnumber'=> 'required',
              'file'=> 'mimes:jpeg,png,jpg,bmp|nullable|max:5999'
           ]);
           if($request->hasFile('file')){
               $fileWithExt=$request->file('file')->getClientOriginalName();
               //Get just filename
               $file=pathinfo($fileWithExt, PATHINFO_FILENAME);
               //Get just ext
               $extension=$request->file('file')->getClientOriginalExtension();
               //Filename to Store
               $fileName=$file.'_'.time().'.'.$extension;
               //Upload Image
               $path=$request->file('file')->storeAs('public/image',$fileName);
           }else{
               $fileName="noimage.jpg";
           }
              $gallery = new Gallery;
        $gallery->title=$request->input('title');
        $gallery->subtitle=$request->input('serialnumber');
        // $gallery->file=$fileName;
        $gallery->save();

        return redirect('gallery')->with('success','Gallery Created');
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
        $galleries = Gallery::where('id',$id)->first();
        return view('gallery.edit',compact('galleries'));
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
              'serialnumber'=> 'required',
              'file'=> 'mimes:jpeg,png,jpg,bmp|nullable|max:5999'
           ]);
           if($request->hasFile('file')){
               $fileWithExt=$request->file('file')->getClientOriginalName();
               //Get just filename
               $file=pathinfo($fileWithExt, PATHINFO_FILENAME);
               //Get just ext
               $extension=$request->file('file')->getClientOriginalExtension();
               //Filename to Store
               $fileName=$file.'_'.time().'.'.$extension;
               //Upload Image
               $path=$request->file('file')->storeAs('public/image',$fileName);
           }else{
               $fileName="noimage.jpg";
           }
        $gallery = Gallery::find($id);
        $gallery->title=$request->input('title');
        $gallery->subtitle=$request->input('serialnumber');
        if($request->hasFile('file')){
            $gallery->file=$fileName;
        }
        $gallery->save();

        return redirect('gallery')->with('success','Gallery Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleries =Gallery::find($id);
                $galleries->delete();
              return redirect('gallery')->with('galleries',$galleries);
    }
}
