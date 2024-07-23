<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Assesment';
        $dataquestion = Question::paginate(1);
        return view('question', compact('dataquestion', 'title'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Data Assesment';
        return view('formQuestion', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|min:3',
            'option_1' => 'required',
            'option_2' => 'required',
            'score_1' => 'required',
            'score_2' => 'required',
        ]);

        Question::create([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'option_5' => $request->option_5,
            'option_6' => $request->option_6,
            'option_7' => $request->option_7,
            'option_8' => $request->option_8,
            'option_9' => $request->option_9,
            'option_10' => $request->option_10,
            'option_11' => $request->option_11,
            'option_12' => $request->option_12,
            'score_1' => $request->score_1,
            'score_2' => $request->score_2,
            'score_3' => $request->score_3,
            'score_4' => $request->score_4,
            'score_5' => $request->score_5,
            'score_6' => $request->score_6,
            'score_7' => $request->score_7,
            'score_8' => $request->score_8,
            'score_9' => $request->score_9,
            'score_10' => $request->score_10,
            'score_11' => $request->score_11,
            'score_12' => $request->score_12,
            'answer' => $request->answer,
            'total_score' => $request->total_score,
            'user_id' => $request->iduser_id
        ]);

        return redirect('questions')->with('success', 'Data assesment created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get product by ID
        $question = Question::findOrFail($id);

        return view('showQuestion', $id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get product by ID
        $question = Question::findOrFail($id);

        return view('editQuestion', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'question' => 'required|min:3',
            'option_1' => 'required',
            'option_2' => 'required',
            'score_1' => 'required',
            'score_2' => 'required',
        ]);

        $question = Question::findOrFail($id);

        $question->update([
            'question' => $request->question,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
            'option_3' => $request->option_3,
            'option_4' => $request->option_4,
            'option_5' => $request->option_5,
            'option_6' => $request->option_6,
            'option_7' => $request->option_7,
            'option_8' => $request->option_8,
            'option_9' => $request->option_9,
            'option_10' => $request->option_10,
            'option_11' => $request->option_11,
            'option_12' => $request->option_12,
            'score_1' => $request->score_1,
            'score_2' => $request->score_2,
            'score_3' => $request->score_3,
            'score_4' => $request->score_4,
            'score_5' => $request->score_5,
            'score_6' => $request->score_6,
            'score_7' => $request->score_7,
            'score_8' => $request->score_8,
            'score_9' => $request->score_9,
            'score_10' => $request->score_10,
            'score_11' => $request->score_11,
            'score_12' => $request->score_12,
            'answer' => $request->answer,
            'total_score' => $request->total_score,
            'user_id' => $request->iduser_id
        ]);

        // Education::updated($id);
        return redirect()->route('questions.index')->with('success', 'Question updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
