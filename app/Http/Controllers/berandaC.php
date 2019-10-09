<?php

namespace App\Http\Controllers;

use App\beranda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Validator;

class berandaC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // menampilkan tabel mahasiswa
    {
        $mahasiswa = DB::table('mahasiswa')->paginate(20);

       return view('berandaview',['mahasiswa'=> $mahasiswa]);
    }

    public function formTambahData () //menampilkan form tambah data
    {
        $mahasiswa = mahasiswa::all();

        return view('formtambahdata',['mahasiswa' => $mahasiswa]);
    }

    public function simpanData(Request $request)
    {
        $datamahasiswa = new mahasiswa();
        $datamahasiswa->id_mahasiswa=$request->id_mahasiswa;
        $datamahasiswa->nim->$request->nim;
        $datamahasiswa->nama->$request->nama;
        $datamahasiswa->jurusan->$request->jurusan;
        $datamahasiswa->alamat->$request->alamat;
        $datamahasiswa->save();
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
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function show(beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function edit(beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\beranda  $beranda
     * @return \Illuminate\Http\Response
     */
    public function destroy(beranda $beranda)
    {
        //
    }
}
