<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen_model;



class DosenController extends Controller
{
    //
    public function index(){
        $myjurnal = new Dosen_model();
        $dosen   = $myjurnal->tampil_dosen();
        //dd($jurnal);
        $data = array('dosen' => $dosen);
        return view('dosen/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('dosen/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('dosen')
         ->insert([
             'nama_dosen'  =>  $request->nama_dosen,
             'alamat_dosen'  =>  $request->alamat_dosen,
             'hp'  =>  $request->hp,
             
         ]);
         return redirect('dosen');
     }
 
     public function edit($id){
         // return ('Testing');
         $dosen = \DB::table('dosen')->where('id', $id)->first();
         //dd($akun);
         $data = array('dosen' => $dosen);
         return view('dosen/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('dosen')->where('id',$request->id)
         ->update([
            'nama_dosen'  =>  $request->nama_dosen,
            'alamat_dosen'  =>  $request->alamat_dosen,
            'hp'  =>  $request->hp,
            
         ]);
         return redirect('dosen');
     }
 
     public function delete ($id){
         $query = \DB::table('dosen')->where('id',$id)->delete();
         return redirect('dosen');
     }
}
