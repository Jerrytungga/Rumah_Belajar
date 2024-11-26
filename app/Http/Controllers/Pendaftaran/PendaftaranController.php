<?php

namespace App\Http\Controllers\Pendaftaran;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Kehadiran_mentor;
use App\Http\Controllers\Controller;
use App\Models\Kehadiran_siswa;

class PendaftaranController extends Controller
{
    //
   public function Formpendaftaran(){
    $date = Carbon::today(); 
    $kehadiranMentor = Kehadiran_mentor::all();
    $kehadiranSiswa = Kehadiran_siswa::all();
    return view('Pendaftaran.index', [
        "kehadiranMentor" => $kehadiranMentor,
        "kehadiranSiswa" => $kehadiranSiswa,
    ]);
   }

   public function form_mentor(){
    return view('Pendaftaran.form_mentor');
   }
   public function sform_mentor(Request $request){

     // Validasi data input
     $request->validate([
        'nama' => 'required|string',
        'distrik' => 'required|string',
        'status_kehadiran' => 'required|in:Hadir,Tidak Hadir',
        'mapel' => 'required|string',
        'catatan' => 'nullable|string',
    ]);
    $date = Carbon::today(); 
    Kehadiran_mentor::create([
            'nama' => $request->nama,
            'distrik' => $request->distrik,
            'status_kehadiran' => $request->status_kehadiran,
            'mata_pelajaran' => $request->mapel,
            'catatan' => $request->catatan,
            'tanggal' => $date,
             // Hanya tanggal hari ini tanpa waktu
      
      ]);

      return redirect()->route('tampil.data')->with('success', 'Data mentor berhasil dimasukan!');

   
   }

   public function EditMentor($id){
    
    // Ambil data trainee berdasarkan ID
    $mentor = Kehadiran_mentor::findOrFail($id);

    return view('Pendaftaran.edit_mentor', [
        "mentor" => $mentor,
    ]);
   }

   public function updatementor(Request $request, $id)
{
    // Find the mentor record
    $mentor = Kehadiran_mentor::findOrFail($id);

    // Update the mentor data
    $mentor->update([
        'nama' => $request->input('nama'),
        'distrik' => $request->input('distrik'),
        'status_kehadiran' => $request->input('status_kehadiran'),
        'mata_pelajaran' => $request->input('mapel'),
        'catatan' => $request->input('catatan'),
    ]);

    // Redirect or return success response
    return redirect()->route('tampil.data')->with('success', 'Data mentor berhasil di Edit!');
}

public function form_siswa(){
    return view('Pendaftaran.form_siswa');
   }

   public function sform_siswa(Request $request){

    // Validasi data input
    $request->validate([
       'nama' => 'required|string',
       'distrik' => 'required|string',
       'status_kehadiran' => 'required|in:Hadir,Tidak Hadir',
       'mapel' => 'required|string',
   ]);
   $date = Carbon::today(); 
   Kehadiran_siswa::create([
           'nama' => $request->nama,
           'distrik' => $request->distrik,
           'status_kehadiran' => $request->status_kehadiran,
           'mata_pelajaran' => $request->mapel,
           'catatan' => $request->catatan,
           'tanggal' => $date,
            // Hanya tanggal hari ini tanpa waktu
     
     ]);

     return redirect()->route('tampil.data')->with('success', 'Data siswa berhasil dimasukan!');

  
  }


  public function EditSiswa($id){
    
    // Ambil data trainee berdasarkan ID
    $siswa = Kehadiran_siswa::findOrFail($id);

    return view('Pendaftaran.edit_siswa', [
        "siswa" => $siswa,
    ]);
   }

   public function updatesiswa(Request $request, $id)
{
    // Find the mentor record
    $mentor = Kehadiran_siswa::findOrFail($id);

    // Update the mentor data
    $mentor->update([
        'nama' => $request->input('nama'),
        'distrik' => $request->input('distrik'),
        'status_kehadiran' => $request->input('status_kehadiran'),
        'mata_pelajaran' => $request->input('mapel'),
    ]);

    // Redirect or return success response
    return redirect()->route('tampil.data')->with('success', 'Data siswa berhasil di Edit!');
}
}
