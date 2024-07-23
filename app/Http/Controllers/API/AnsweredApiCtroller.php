<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnsweredResource;
use Illuminate\Http\Request;
use App\Models\Answered;
use App\Models\Question;

class AnsweredApiCtroller extends Controller
{
    /**
     * Simpan skor berdasarkan ID pertanyaan.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'scores' => 'required|numeric',
        ]);

        // Buat instance Answered baru
        $answered = new Answered();
        $answered->answered = $validated['answered'];
        $answered->scores = $validated['scores'];
        $answered->total_score = $validated['total_scores'];
        $answered->question_id = $validated['question_id'];
        $answered->user_id = $validated['user_id'];
        $answered->save();

        // return response()->json([
        //     'success' => true,
        //     'message' => 'Score has been saved successfully',
        //     'data' => $answered,
        // ], 201);
        return new AnsweredResource(true, 'Answered Data Save!', $answered);
    }
}
