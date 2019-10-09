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
        $mahasiswa = beranda::all();

        return view('formtambahdata',['mahasiswa' => $mahasiswa]);
    }

    public function simpanData(Request $request)
    {
        $datamahasiswa = new beranda();
        $datamahasiswa->id_mahasiswa=$request->id_mahasiswa;
        $datamahasiswa->nim=$request->nim;
        $datamahasiswa->nama=$request->nama;
        $datamahasiswa->jurusan=$request->jurusan;
        $datamahasiswa->alamat=$request->alamat;
        $datamahasiswa->save();

        return redirect('/');
    }

    public function formEditData($id_mahasiswa) //menampilkan form edit data mahasiswa
    {
        $mahasiswa = beranda::find($id_mahasiswa);
        $datamahasiswa = beranda::all();

        return view('formeditdata',['mahasiswa' => $mahasiswa,'datamahasiswa' => $datamahasiswa]);
    }

    public function editData(Request $request)
    {
        beranda::find($request->id_mahasiswa)->update([
            'id_mahasiswa' => $request->id_mahasiswa,
            'nim'          => $request->nim,
            'nama'         => $request->nama,
            'jurusan'      => $request->jurusan,
            'alamat'       => $request->alamat
        ]);
        return redirect('/');
    }

    public function formHapusData($id_mahasiswa) // menampilkan form hapus data
    {
        $mahasiswa = beranda::find($id_mahasiswa);
        return view('formhapusdata',['mahasiswa' => $mahasiswa]);
    }

    public function hapusData($id_mahasiswa)
    {
        $mahasiswa = beranda::where('id_mahasiswa', $id_mahasiswa)->first();
        $mahasiswa->delete();

        return redirect('/');
    }
}
