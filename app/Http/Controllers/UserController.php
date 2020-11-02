<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at','desc')->get();
        return view('user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.index');
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
            'name' => 'required',
              'email'=> 'required',
              'role'=> 'required',
              'password'=>'required',
           ]);
           $user = new User;
           $user->name=$request->input('name');
           $user->email=$request->input('email');
           $user->role=$request->input('role');
           $user->password=Hash::make($request->input('password'));
           $user->save();

        return redirect('user')->with('success','User Created');
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
        $users = User::where('id',$id)->first();
        return view('user.edit',compact('users'));
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
            'name' => 'required',
              'email'=> 'required',
              'role'=> 'required',
           ]);
           $user =User::find($id);
           $user->name=$request->input('name');
           $user->email=$request->input('email');
           $user->role=$request->input('role');
           $user->password=Hash::make($request->input('password'));
           $user->save();

        return redirect('user')->with('success','User Created');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users =User::find($id);
        $users->delete();
     return redirect('user')->with('users',$users);
    }
}
