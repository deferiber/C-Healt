<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recommendation;
use Illuminate\Http\Request;


class RecommendationApiController extends Controller
{

    // public function index(Request $request)
    // {
    //     $recommendation = Recommendation::all();

    //     return response()->json([
    //         'status' => true,
    //         'data' => $recommendation,
    //         'message' => 'Get data success!'
    //     ]);
    // }

    public function getRecommendation(Request $request)
    {
        $score = $request->query('score');

        // Debugging: Log score
        // Log::info("Received score: $score");

        $recommendation = Recommendation::where('min_score', '<=', $score)
                                        ->where('max_score', '>=', $score)
                                        ->first();

        // Debugging: Log recommendation
        // Log::info("Found recommendation: " . json_encode($recommendation));

        if ($recommendation) {
            return response()->json($recommendation);
        } else {
            return response()->json(['error' => 'Recommendation not found'], 404);
        }
    }
}
