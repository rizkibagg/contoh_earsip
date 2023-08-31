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
        return view('page.surat-belummenikah', ['dropdown' => 'Surat', 'title' => 'Surat Keterangan Belum Menikah'])->with('skbm', $skbm);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
