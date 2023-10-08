<?php

namespace App\Http\Controllers;

use App;
use App\Models\TidakMampu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class TidakMampuController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('id');
    }
    public function index()
    {
        $sktm = TidakMampu::all();
        return view('page.surat-ktm', [
            'dropdown1' => 'Surat Keluar',
            'dropdown2' => 'Kemasyarakatan',
            'title' => 'Surat Keterangan Tidak Mampu'
        ])->with('sktm', $sktm);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ]);

        $sktm = new TidakMampu;
        $sktm->nomor = $request->nomor;
        $sktm->nama = $request->nama;
        $sktm->nik = $request->nik;
        $sktm->jenis_kelamin = $request->jenis_kelamin;
        $sktm->tempat = $request->tempat;
        $sktm->tanggal_lahir = $request->tanggal_lahir;
        $sktm->kewarganegaraan = $request->kewarganegaraan;
        $sktm->agama = $request->agama;
        $sktm->status_perkawinan = $request->status_perkawinan;
        $sktm->pekerjaan = $request->pekerjaan;
        $sktm->alamat = $request->alamat;
        $sktm->deskripsi = $request->deskripsi;

        $sktm->save();

        return redirect()->back();

        // $data = view('template.surat-ktm', compact('sktm'))->render();
        // $pdf = Pdf::loadHTML($data);
        // return $pdf->stream();

        // return redirect()->back()->with('toast_success', 'Data Berhasil Ditambah!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'status_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ]); 

        $sktm = TidakMampu::find($id);
        $sktm->nomor = $request->nomor;
        $sktm->nama = $request->nama;
        $sktm->nik = $request->nik;
        $sktm->jenis_kelamin = $request->jenis_kelamin;
        $sktm->tempat = $request->tempat;
        $sktm->tanggal_lahir = $request->tanggal_lahir;
        $sktm->kewarganegaraan = $request->kewarganegaraan;
        $sktm->agama = $request->agama;
        $sktm->status_perkawinan = $request->status_perkawinan;
        $sktm->pekerjaan = $request->pekerjaan;
        $sktm->alamat = $request->alamat;
        $sktm->deskripsi = $request->deskripsi;

        $sktm->save();
        return redirect()->back();
        // return redirect()->back()->with('toast_success', 'Data Berhasil Diupdate!');
    }
    public function destroy($id)
    {
        $sktm = TidakMampu::find($id);
        $sktm->delete();
        return redirect()->back();
        // return redirect()->back()->with('toast_info', 'Data Berhasil Dihapus!');
    }
    public function show($id) {
        $sktm = TidakMampu::findOrFail($id);
        // Menggunakan view untuk mengambil HTML dari template surat-ktm
        $data = view('template.surat-ktm', compact('sktm'))->render();
        // Membuat instance DomPDF
        $pdf = Pdf::loadHTML($data);
        // Menghasilkan file PDF dan mengirimkannya sebagai respons stream
        return $pdf->stream();
    }
}
