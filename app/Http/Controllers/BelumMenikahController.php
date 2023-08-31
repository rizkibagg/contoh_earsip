<?php

namespace App\Http\Controllers;

use App\Models\BelumMenikah;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class BelumMenikahController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('id');
    }
    public function index()
    {
        $skbm = BelumMenikah::all();
        return view('page.surat-kbm', ['dropdown' => 'Surat', 'title' => 'Surat Keterangan Belum Menikah'])->with('skbm', $skbm);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);

        $skbm = new BelumMenikah;
        $skbm->nomor = $request->nomor;
        $skbm->nama = $request->nama;
        $skbm->jenis_kelamin = $request->jenis_kelamin;
        $skbm->tempat = $request->tempat;
        $skbm->tanggal_lahir = $request->tanggal_lahir;
        $skbm->agama = $request->agama;
        $skbm->pekerjaan = $request->pekerjaan;
        $skbm->alamat = $request->alamat;

        $skbm->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $skbm = BelumMenikah::findOrFail($id);
        // Menggunakan view untuk mengambil HTML dari template surat-ktm
        $data = view('template.surat-kbm', compact('skbm'))->render();
        // Membuat instance DomPDF
        $pdf = Pdf::loadHTML($data);
        // Menghasilkan file PDF dan mengirimkannya sebagai respons stream
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
