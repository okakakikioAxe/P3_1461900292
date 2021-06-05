<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Pasien;
use App\Models\Dokter;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kamar::all();
        return view('dataKamar0292', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahKamar0292');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = $request->pasien;
        $dokter = $request->dokter;
        $data_pasien = Pasien::where('id',$pasien)->get();
        $data_dokter = Dokter::where('id',$dokter)->get();
        $cek_pasien = '';
        $cek_dokter = '';
        foreach( $data_pasien as $p){
            $cek_pasien = $p->id;
        }
        foreach( $data_dokter as $d){
            $cek_dokter = $d->id;
        }

        if(($cek_pasien != '' || $cek_pasien != null)  ||  ($cek_dokter != '' || $cek_dokter != null)){
            return back()->withInput();
        }
        else{
            $kamar = Kamar::where('id_pasien',$pasien)->get();
            $cek_kamar = '';
            foreach($kamar as $k){
                $cek_kamar = $k->id_pasien;
            }
            if($cek_kamar == null || $cek_kamar == ''){
                $kamar = new Kamar;
                $kamar->id_pasien = $pasien;
                $kamar->id_dokter = $dokter;
                $kamar->save();
                return redirect()->route('kamar.index');
            }
            else{
                return back()->withInput();
            }
            
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kamar::where('id',$id)->get();
        return view('detailKamar0292', ['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kamar::where('id',$id)->get();
        return view('editKamar0292', ['data'=>$data]);
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
        $pasien = $request->pasien;
        $dokter = $request->dokter;
        Kamar::where('id',$id)->update(['id_pasien'=>$pasien,'id_dokter'=>$dokter]);
        return redirect()->route('kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kamar::where('id',$id)->delete();
        return redirect()->route('kamar.index');
    }

    public function filter(Request $request){
        $dokter = $request->nama;
        $data = Kamar::where('id_dokter',$dokter)->get();
        return view('dataKamar0292', ['data'=>$data]);
    }
}
