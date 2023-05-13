<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class HomeController extends Controller
{
    public function index($name)
    {
        return view('home')->with(compact('name'));
    }

    public function get_karyawan(Request $request)
    {
        if(empty($request->id))
            $data = karyawan::all(); // get semua data karyawan
        else
            $data = karyawan::find($request->id); // get data karyawan dengan id 1
        return json_encode($data);
    }

    public function post_karyawan(Request $request)
    {
        $karyawan = new karyawan;
        $karyawan->nim = $request->nim;
        $karyawan->nama = $request->nama;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->tempat_lahir = $request->tempat_lahir;
        $karyawan->alamat = $request->alamat;
        $karyawan->email = $request->email;
        $karyawan->nomer_telepon = $request->nomer_telepon;
        $karyawan->gaji = $request->gaji;
        $karyawan->status = $request->status;
        
        if($karyawan->save()){
            return json_encode([
                'pesan' => ' Data berhasil'
            ]);
        }else{
            return json_encode([
                'pesan' => 'Data gagal'
            ]);
        }
    }
}
