<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = new karyawan;
        $karyawan->nim = '222000910002';
        $karyawan->nama = 'Putu Yudi pratama';
        $karyawan->tanggal_lahir = '1999-11-06';
        $karyawan->tempat_lahir ='Gianyar';
        $karyawan->alamat = 'Denpasar, 06 11 99';
        $karyawan->email = 'sandicabues00@gmail.com';
        $karyawan->nomer_telepon = '087881602440';
        $karyawan->gaji = '10.000.000';
        $karyawan->status = 'active';
        $karyawan->save();
        
        // DB::table('karyawan')->insert([
        //     'nim'  => '222000910002',
        //     'nama' => 'Putu Yudi pratama',
        //     'tanggal_lahir' => '1999-11-06',
        //     'tempat_lahir' => 'Gianyar',
        //     'alamat' => 'Denpasar, 06 11 99',
        //     'email' => 'sandicabues00@gmail.com',
        //     'nomer_telepon' => '087881602440',
        //     'gaji' =>  '10.000.000',
        //     'status' => 'active'
        // ]);
    
  
    }
}
