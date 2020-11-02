<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at','desc')->get();
        return view('portfolio.index')->with('portfolios',$portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('portfolio');
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
            'serialnumber'=>'required',
            'status'=>'required',
            'clientname'=>'required',
            'service'=>'required',
            'tags'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
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
            $path=$request->file('file')->storeAs('public/portfolio',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $portfolio = new Portfolio;
        $portfolio->title=$request->input('title');
        $portfolio->serialnumber=$request->input('serialnumber');
        $portfolio->status=$request->input('status');
        $portfolio->clientname=$request->input('clientname');
        $portfolio->service=$request->input('service');
        $portfolio->tags=$request->input('tags');
        $portfolio->startdate=$request->input('startdate');
        $portfolio->enddate=$request->input('enddate');
        $portfolio->body=$request->input('body');
        $portfolio->file=$fileName;
        $portfolio->save();

        return redirect('portfolio')->with('success','Porfolio Created');
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
        $portfolios = Portfolio::where('id',$id)->first();
        return view('portfolio.edit',compact('portfolios'));
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
            'serialnumber'=>'required',
            'status'=>'required',
            'clientname'=>'required',
            'service'=>'required',
            'tags'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
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
            $path=$request->file('file')->storeAs('public/event',$fileName);
        }else{
            $fileName="noimage.jpg";
        }
        $portfolio = Portfolio::find($id);
        $portfolio->title=$request->input('title');
        $portfolio->serialnumber=$request->input('serialnumber');
        $portfolio->status=$request->input('status');
        $portfolio->clientname=$request->input('clientname');
        $portfolio->service=$request->input('service');
        $portfolio->tags=$request->input('tags');
        $portfolio->startdate=$request->input('startdate');
        $portfolio->enddate=$request->input('enddate');
        $portfolio->body=$request->input('body');
        if($request->hasFile('file')){
            $portfolio->file=$fileName;
        }
        $portfolio->save();

        return redirect('portfolio')->with('success','Porfolio Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $portfolios=Portfolio::find($id);
       $portfolios->delete();
       return redirect('portfolio')->with('portfolios',$portfolios);
    }
}
