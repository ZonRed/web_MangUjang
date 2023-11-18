<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\hasil;
use Illuminate\Support\Facades\Auth;


class HasilController extends Controller
{
    public function hasil()
    {
        $hasil = hasil::all();
        return view('admin.D_Hasil',['hasil'=>$hasil]);
    }

    public function InputHasil()
    {
        $hasil = hasil::all();
        return view('admin.D_InputHasil',compact('hasil'));
    }

    public function save(Request $request) 
    {
        // $hasil::create([
        //     'tanggal'=> $request->tanggal,
        //     'lawan'=> $request->lawan,
        //     'skor'=> $request->skor,
        //     'hasil'=> $request->hasil

        // ]); 

        // return redirect('admin.D_Hasil');
        $hasil = new hasil;
        $hasil ->tanggal=$request->tanggal;
        $hasil ->lawan=$request->lawan;
        $hasil ->skor=$request->skor;
        $hasil ->nama_hasil=$request->nama_hasil;
        $hasil ->save();
        return redirect('D_Hasil');
    }

}
