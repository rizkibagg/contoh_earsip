<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMasukController extends Controller
{
    public function index()
    {
        // $file = $request->file('dokumen');
        // $fileName = 'SM-' . time() . '.' . $file->getClientOriginalExtension();
        // $file->move(public_path('dokumen'), $fileName);
        // Gdrive::put('Surat Masuk/' . $fileName, public_path('dokumen/' . $fileName));
        // Storage::disk('google')->put('Surat Masuk/' .$fileName, file_get_contents($file));
        // $record['dokumen'] = $fileName;

        return view('page.surat-masuk', [
            'dropdown1' => '',
            'dropdown2' => '',
            'title' => 'Surat Masuk'
        ]);
    }
}
