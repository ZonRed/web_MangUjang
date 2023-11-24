<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;


class LaporanController extends Controller
{
    public function Laporan()
    {
        $Laporan = Laporan::paginate(5); // Paginate with 5 items per page
        return view('admin.D_Laporan',['Laporan'=>$Laporan]);
    }

    public function InputLaporan()
    {
        $Laporan = Laporan::all();
        return view('Pengguna.index',compact('Laporan'));
    }


    public function SaveLaporan(Request $request) 
    {
        // $hasil::create([
        //     'tanggal'=> $request->tanggal,
        //     'lawan'=> $request->lawan,
        //     'skor'=> $request->skor,
        //     'hasil'=> $request->hasil

        // ]); 

        // return redirect('admin.D_Hasil');
        $Laporan = new Laporan;
        $Laporan ->nama=$request->nama;
        $Laporan ->email=$request->email;
        $Laporan ->pesan=$request->pesan;
        $Laporan ->save();
        return redirect('index');
    }

    public function delete_Laporan($id)
    {
        Laporan::destroy($id);
        return redirect('D_Laporan');
        
    }
}