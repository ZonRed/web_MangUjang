<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Statistik;
use Illuminate\Support\Facades\Auth;


class StatistikController extends Controller
{
    public function Statistik()
    {
        $Statistik = Statistik::paginate(5); // Paginate with 5 items per page
        return view('admin.D_Statistik',['Statistik'=>$Statistik]);
    }

    public function pengguna_statistik()
    {
        $Statistik = Statistik::paginate(5); // Paginate with 5 items per page
        return view('pengguna.statistik',['Statistik'=>$Statistik]);
    }

    public function InputStatistik()
    {
        $Statistik = Statistik::all();
        return view('admin.D_InputStatistik',compact('Statistik'));
    }


    public function SaveStatistik(Request $request) 
    {
        // $hasil::create([
        //     'tanggal'=> $request->tanggal,
        //     'lawan'=> $request->lawan,
        //     'skor'=> $request->skor,
        //     'hasil'=> $request->hasil

        // ]); 

        // return redirect('admin.D_Hasil');
        $Statistik = new Statistik;
        $Statistik ->punggung=$request->punggung;
        $Statistik ->posisi=$request->posisi;
        $Statistik ->nama_pemain=$request->nama_pemain;
        $Statistik ->penampilan=$request->penampilan;
        $Statistik ->gol=$request->gol;
        $Statistik ->assists=$request->assists;
        $Statistik ->kartu_kuning=$request->kartu_kuning;
        $Statistik ->kartu_merah=$request->kartu_merah;
        $Statistik ->save();
        return redirect('D_Statistik');
    }

    public function delete_statistik($id)
    {
        Statistik::destroy($id);
        return redirect('D_Statistik');
        
    }
}