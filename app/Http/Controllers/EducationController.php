<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;




class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Edukasi';
        $dataedu = Education::paginate(1);
        return view('education', compact('dataedu', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Education';
        return view('formEducation', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        Education::create([
            'title' => $request->title,
            'desc' => $request->desc,

        ]);

        return redirect('educations')->with('success', 'Educations created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get product by ID
        $showQuestion = Education::findOrFail($id);

        return view('showQuestion', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $education = Education::findOrFail($id);

        return view('editEducataion', compact('education'));

        // return view('editEducataion')->with('education', $education);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'  => 'required|min:5',
            'desc'   => 'required|min:10'
        ]);

        $education = Education::findOrFail($id);

        $education->update([
            'title' => $request->title,
            'desc' => $request->desc
        ]);

        // Education::updated($id);
        return redirect()->route('educations.index')->with('success', 'Educations updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        try {
            $education->deleteOrFail();
             return redirect()->back()->with('success', 'User deleted');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
