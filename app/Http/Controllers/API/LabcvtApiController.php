<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Labcvt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\LabcvtResource;

class LabcvtApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datalabcvts = Labcvt::all();

        return response()->json([
            'status' => true,
            'data' => $datalabcvts,
            'message' => 'Get data success!'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'logo'     => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_lembaga' => 'required',
            'alamat' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $logo = $request->file('logo');
        $logo->storeAs('public/images', $logo->hashName());

        //create post
        $datalabcvts = Labcvt::create([
            'logo' => $logo->hashName(),
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,
            'hasil_lab' => $request->hasil_lab,
            'map' => $request->map,
            // 'created_at'   => $request->created_at,
            // 'updated_at'   => $request->created_at,
        ]);

        // return response
        return new LabcvtResource(true, 'Data Post Berhasil Ditambahkan!', $datalabcvts);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
