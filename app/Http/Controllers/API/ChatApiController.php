<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class ChatApiController extends Controller
{
    public function getCounselors()
    {
        try {
            $counselors = User::where('roles', 3)->get();
            return response()->json(['success' => true, 'counselors' => $counselors]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_id' => 'required|integer|exists:users,id',
            'receiver_id' => 'required|integer|exists:users,id',
            'message' => 'required|string',
            'file' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        try {
            $chat = Chat::create([
                'sender_id' => $request->sender_id,
                'receiver_id' => $request->receiver_id,
                'message' => $request->message,
                'file' => $request->file,
            ]);

            return response()->json(['success' => true, 'message' => 'Message sent successfully', 'chat' => $chat]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function getChats($userId)
    {
        try {
            Log::info("Fetching chats for user ID: $userId");

            $chats = Chat::where('sender_id', $userId)
                ->orWhere('receiver_id', $userId)
                ->with(['sender', 'receiver'])
                ->get();

            return response()->json(['success' => true, 'chats' => $chats]);
        } catch (\Exception $e) {
            Log::error("Error fetching chats: " . $e->getMessage());
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }



    // public function getChats(Request $request)
    // {
    //     $userId = $request->user()->id; // Mendapatkan ID pengguna yang sedang login
    //     $receiverId = $request->input('receiver_id'); // ID penerima yang dikirim dari client

    //     try {
    //         // Ambil pesan antara pengguna yang sedang login dan penerima
    //         $chats = Chat::where(function ($query) use ($userId, $receiverId) {
    //             $query->where('sender_id', $userId)
    //                 ->where('receiver_id', $receiverId);
    //         })
    //         ->orWhere(function ($query) use ($userId, $receiverId) {
    //             $query->where('sender_id', $receiverId)
    //                 ->where('receiver_id', $userId);
    //         })
    //         ->with(['sender', 'receiver'])
    //         ->get();

    //         return response()->json(['success' => true, 'chats' => $chats]);
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    //     }
    // }

    // public function getChats($userId)
    // {
    //     try {
    //         $chats = Chat::where('sender_id', $userId)
    //             ->orWhere('receiver_id', $userId)
    //             ->with(['sender', 'receiver'])
    //             ->get();

    //         return response()->json(['success' => true, 'chats' => $chats]);
    //     } catch (\Exception $e) {
    //         return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    //     }
    // }
}
