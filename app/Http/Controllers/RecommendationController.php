<?php

namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;
use Exception;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Rekomendasi';
        $recommendation = Recommendation::paginate(3);
        return view('recommendation', compact('recommendation', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Rekomendasi';
        return view('formRecommendation', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'min_score' => 'required',
            'max_score' => 'required',
            'recommendation' => 'required',
        ]);

        Recommendation::create([
            'min_score' => $request->min_score,
            'max_score' => $request->max_score,
            'recommendation' => $request->recommendation,

        ]);

        return redirect('recommendations')->with('success', 'Rekomendasi telah dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get product by ID
        $showrecommendation = Recommendation::findOrFail($id);

        return view('showrecommendation', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $recommendation = Recommendation::findOrFail($id);

        return view('editRecommendation', compact('recommendation'));

        // return view('editEducataion')->with('education', $education);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'min_score' => 'required',
            'max_score' => 'required',
            'recommendation' => 'required',
        ]);

        $recommendation = Recommendation::findOrFail($id);

        $recommendation->update([
            'min_score' => $request->min_score,
            'max_score' => $request->max_score,
            'recommendation' => $request->recommendation,
        ]);

        // recommendation::updated($id);
        return redirect()->route('recommendations.index')->with('success', 'Rekomendasi berhasil diupdated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommendation $recommendation)
    {
        try {
            $recommendation->deleteOrFail();
             return redirect()->back()->with('success', 'Rekomendasi deleted');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
