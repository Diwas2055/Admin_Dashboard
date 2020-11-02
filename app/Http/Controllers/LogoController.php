<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos=Logo::orderBy('created_at','desc')->get();
        return view('footer.index')->with('logos',$logos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('footer');
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
            'title'=>'required',
            'body'=>'required',
            'file'=>'mimes:jpeg,png,jpg,bmp|nullable|max:5999',
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
            $path=$request->file('file')->storeAs('public/footer',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $logo = new Logo;
        $logo->title=$request->input('title');
        $logo->serial=$request->input('body');
        $logo->file=$fileName;
        $logo->save();

        return redirect('footer')->with('success','Footer Created');
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
        $logos =Logo::where('id',$id)->first();
        return view('footer.edit',compact('logos'));
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
            'title'=>'required',
            'body'=>'required',
            'file'=>'mimes:jpeg,png,jpg,bmp|nullable|max:5999',
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
            $path=$request->file('file')->storeAs('public/footer',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $logo =Logo::find($id);
        $logo->title=$request->input('title');
        $logo->serial=$request->input('body');
        if($request->hasFile('file')){
        $logo->file=$fileName;
        }
        $logo->save();

        return redirect('footer')->with('success','Footer Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logos =Logo::find($id);
                $logos->delete();
              return redirect('footer')->with('logos',$logos);
    }
}
