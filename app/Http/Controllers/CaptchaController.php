<?php

namespace App\Http\Controllers;

use App\Models\Captcha;
use Illuminate\Http\Request;

class CaptchaController extends Controller
{
    public function index(){
        return view('page.captcha', [
            'dropdown1' => '',
            'dropdown2' => '',
            'title' => 'Captcha',
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'komentar' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'nomor_hp' => 'required',
            'captcha' => 'required|captcha',
        ],[
            'required' => 'Lengkapi Data!',
            'captcha' => 'Captcha Tidak Valid!'
        ]);

        $data = new Captcha;
        $data->komentar = $request->komentar;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->nomor_hp = $request->nomor_hp;

        $data->save();
        return redirect()->back()->with('toast_success', 'Data Terkirim!');
    }
}
