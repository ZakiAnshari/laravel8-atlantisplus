<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(`pendaftaran`)->insert([
            'nama' => 'Zaki Anshari',
            'jeniskelamin	' => 'Laki-Laki',
            'agama' => 'Islam',
            'jenjangpendidikan' => 'S1',
            'emailsiswa' => 'Zaki@gmail.com',
            'namasekolahasal' => 'UPI YPTK',
            'namaortu' => 'Zaki Anshari',
            'notelponsiswa' => '0823 8737 7382',
            'notelponortu' => '0823 8737 7382',
        ]);
    }
}
