<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\hasil;
use Illuminate\Support\Facades\Auth;


class HasilController extends Controller
{
    public function hasil()
    {
        $hasil = hasil::paginate(5); // Paginate with 5 items per page
        return view('admin.D_Hasil',['hasil'=>$hasil]);
    }
    public function pengguna_hasil()
    {
        $hasil = hasil::paginate(5); // Paginate with 5 items per page
        return view('pengguna.hasil',['hasil'=>$hasil]);
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


    public function delete_hasil($id)
    {
        hasil::destroy($id);
        return redirect('D_Hasil');
    }

    public function edit_hasil($id)
    {
        $hasil = hasil::find($id);
        return view('admin.D_EditHasil', compact('hasil'));
    }

    public function update_hasil(Request $request, $id)
    {
        $hasil = hasil::find($id);
        
        // Update data hasil dengan data baru
        $hasil->tanggal = $request->tanggal;
        $hasil->lawan = $request->lawan;
        $hasil->skor = $request->skor;
        $hasil->nama_hasil = $request->nama_hasil;

        // Simpan perubahan
        $hasil->save();

        // Redirect ke halaman D_Hasil setelah update
        return redirect('D_Hasil');
    }
}
