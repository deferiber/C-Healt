<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnsweredResource;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\QuestionResource;
use App\Models\Answered;

class QuestionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataquestions = Question::all();

        return response()->json([
            'status' => true,
            'data' => $dataquestions,
            'message' => 'Get data success!'
        ]);
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
    public function show($id)
    {
        $question = Question::find($id);

        //return single post as a resource
        return new QuestionResource(true, 'Detail Data Post!', $question);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
