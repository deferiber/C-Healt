<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Chat';
        $datachat = Chat::paginate(5);
        return view('chat', compact('datachat', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Chat::make($request->all(), [
            'file'     => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'message'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $file = $request->file('file');
        $file->storeAs('public/images', $file->hashName());

        //create post
        $post = Chat::create([
            'file'     => $file->hashName(),
            'message'     => $request->message,
            // 'created_at'   => $request->created_at,
            // 'updated_at'   => $request->created_at,
        ]);

        //return response
        // return new ChatResponse(true, 'Data Post Berhasil Ditambahkan!', $post);

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
