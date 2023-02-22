<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{

    function pendaftaran(){
        return view ('pendaftaran');
    }

    function add(Request $request){
        
        $request->validate([
            
        'nama'=>'required', 
        'jeniskelamin'=>'required',
        'agama'=>'required',
        'jenjangpendidikan'=>'required',
        'emailsiswa'=> 'required',
        'namasekolahasal'=>'required', 
        'namaortu'=>'required',
        'notelponsiswa'=>'required',
        'notelponortu'=>'required',
            
        ]);

        $query =DB::table('pendaftaran')->insert([
            'nama'=>$request->input('nama'),
            'jeniskelamin'=>$request->input('jeniskelamin'),
            'agama'=>$request->input('agama'),
            'jenjangpendidikan'=>$request->input('jenjangpendidikan'),
            'emailsiswa'=>$request->input('emailsiswa'),
            'namasekolahasal'=>$request->input('namasekolahasal'),
            'namaortu'=>$request->input('namaortu'),
            'notelponsiswa'=>$request->input('notelponsiswa'),
            'notelponortu'=>$request->input('notelponortu'),
        ]);
        Alert::success('Success', 'Data Berhasil Di Tambah');

        if($query){
            return back()->with('Success','Data Berhasil Di Simpan');
        }else{
            return back()->with('fail','Data Gagal Di Simpan');
        }

    }

}
