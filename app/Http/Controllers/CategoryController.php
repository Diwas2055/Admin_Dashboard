<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('catrgory');
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
            'name'=>'required',
            'serial'=>'required',
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
            $path=$request->file('file')->storeAs('public/category',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $category = new Category;
        $category->title=$request->input('title');
        $category->serial=$request->input('serial');
        $category->file=$fileName;
        $category->save();

        return redirect('category')->with('success','Category Created');
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
        $categories =Category::where('id',$id)->first();
        return view('category.edit',compact('categories'));
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
            'name'=>'required',
            'serial'=>'required',
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
            $path=$request->file('file')->storeAs('public/category',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $category =Category::find($id);
        $category->title=$request->input('title');
        $category->serial=$request->input('serial');
        if($request->hasFile('file')){
                 $category->file=$fileName;
        }
        $category->save();

        return redirect('category')->with('success','Category Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=Category::find($id);
        $categories->delete();
       return redirect('categories')->with('categories', $categories);
    }
}
