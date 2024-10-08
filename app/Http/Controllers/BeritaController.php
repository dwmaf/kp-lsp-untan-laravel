<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('berita', [
            'beritas' => Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(StoreBeritaRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        // dd($beritum);
        return view('/certainberita', [
            'berita' => Berita::where('id',$beritum->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Berita $berita)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateBeritaRequest $request, Berita $berita)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Berita $berita)
    // {
    //     //
    // }
}
