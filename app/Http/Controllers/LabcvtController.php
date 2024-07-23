<?php

namespace App\Http\Controllers;

use App\Models\Labcvt;
use Illuminate\Http\Request;

class LabcvtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Lab CVT';
        $datalabcvt = Labcvt::paginate(3);
        return view('labcvt', compact('datalabcvt','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create data CVT';
        return view('formLabcvt', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lembaga' => 'required|min:3',
            'alamat' => 'required|min:3',

        ]);

        $namafile = null;

        if($request->logo) {
            $namafile = time().'.'.$request->file('logo')->extension();
            $request->logo->storeAs('public/images', $namafile);
        }


        Labcvt::create([
            'logo' => $namafile,
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,

            // 'hasil_lab' => $request->hasil_lab,
            // 'map' => $request->map,

        ]);
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
