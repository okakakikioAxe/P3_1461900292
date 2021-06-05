<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokter::all();
        return view('dataDokter0292', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahDokter0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $dokter = new Dokter;
        $dokter->nama = $nama;
        $dokter->jabatan = $jabatan;
        $dokter->save();
        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Dokter::where('id',$id)->get();
        return view('detailDokter0292', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dokter::where('id',$id)->get();
        return view('editDokter0292', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $dokter = Dokter::where('id',$id)->get();
        $dokter->nama = $nama;
        $dokter->jabatan = $jabatan;
        $dokter->save();
        return view('dataDokter0292');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::where('id',$id)->delete();
        return redirect()->route('dokter.index');
    }
}
