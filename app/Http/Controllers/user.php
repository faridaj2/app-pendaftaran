<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function index()
    {

        $data = [
            'data' => Auth::user()->student,
            'title' => 'Halaman User'
        ];
        return view('user.index', $data);
    }
    public function store(Request $request)
    {

        student::create([
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'nik' => $request->nik,
            'kk' => $request->kk,
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'pob' => $request->pob,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'hp_ayah' => $request->hp_ayah,
            'hp_ibu' => $request->hp_ibu
        ]);
        return redirect('/user');
    }
    public function detail(Request $request, $id)
    {
        $data = [
            'form' => 'edit_siswa',
            'siswa' => student::find($id)
        ];
        return view('user.detail-siswa', $data);
    }
    public function edit_siswa(Request $request)
    {
        $data = [
            'form' => 'edit_siswa',
            'siswa' => student::find($request->id)

        ];
        return view('user.edit-page', $data);
    }
    public function update_siswa(Request $request){
        student::find($request->id)
        ->update([
            'nama' => $request->nama,
            'kk' => $request->kk,
            'nik' => $request->nik,
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'pob' => $request->pob,
            'dob' => $request->dob,
            'alamat' => $request->alamat,
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'hp_ayah' => $request->hp_ayah,
            'hp_ibu' => $request->hp_ibu
        ]);
       
        return redirect('/user');

    }
}
