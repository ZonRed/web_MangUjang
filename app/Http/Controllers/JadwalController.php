<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Jadwal;
use Illuminate\Support\Facades\Auth;


class JadwalController extends Controller
{
    public function Jadwal()
    {
        $Jadwal = Jadwal::paginate(5); // Paginate with 5 items per page
        return view('admin.D_Jadwal',['Jadwal'=>$Jadwal]);
    }

    public function pengguna_jadwal()
    {
        $Jadwal = Jadwal::paginate(5); // Paginate with 5 items per page
        return view('pengguna.next',['Jadwal'=>$Jadwal]);
    }

    public function InputJadwal()
    {
        $Jadwal = Jadwal::all();
        return view('admin.D_InputJadwal',compact('Jadwal'));
    }


    public function SaveJadwal(Request $request) 
    {
        // $hasil::create([
        //     'tanggal'=> $request->tanggal,
        //     'lawan'=> $request->lawan,
        //     'skor'=> $request->skor,
        //     'hasil'=> $request->hasil

        // ]); 

        // return redirect('admin.D_Hasil');
        $Jadwal = new Jadwal;
        $Jadwal ->tanggal=$request->tanggal;
        $Jadwal ->lawan=$request->lawan;
        $Jadwal ->tempat=$request->tempat;
        $Jadwal ->waktu=$request->waktu;
        $Jadwal ->save();
        return redirect('D_Jadwal');
    }

    public function delete_jadwal($id)
    {
        Jadwal::destroy($id);
        return redirect('D_Jadwal');
        
    }

    public function edit_jadwal($id)
    {
        $Jadwal = Jadwal::find($id);
        return view('admin.D_EditJadwal', compact('Jadwal'));
    }

    public function update_jadwal(Request $request, $id)
    {
        $Jadwal = Jadwal::find($id);
        
        // Update data jadwal dengan data baru
        $Jadwal->tanggal = $request->tanggal;
        $Jadwal->lawan = $request->lawan;
        $Jadwal->tempat = $request->tempat;
        $Jadwal->waktu = $request->waktu;

        // Simpan perubahan
        $Jadwal->save();

        // Redirect ke halaman D_Jadwal setelah update
        return redirect('D_Jadwal');
    }
}