<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('dataUser0292', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::where('id',$id)->get();
        return view('detailUser0292', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User::where('id',$id)->get();
        return view('editUser0292', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $user = User::where('id',$id)->get();
        foreach($user as $user){
            $pw_asli = $user->password;
        }
        
        $pw_lama = $request->pw1;
        $pw_baru_1 = $request->pw2;
        $pw_baru_2 = $request->pw3;
        if($pw_asli != $pw_lama){
            return back()->withInput();
        }
        else{
            if($pw_baru_1 == $pw_baru_2){
                $nama = $request->nama;
                $username = $request->username;
                $user->nama = $nama;
                $user->username = $username;
                $user->password = $pw_baru_1;
                $user->save();
                return redirect()->route('user.index');
            }
            else{
                return back()->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
