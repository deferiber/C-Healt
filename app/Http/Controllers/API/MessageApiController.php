<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MessageApiController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_id' => 'required|integer|exists:users,id',
            'receiver_id' => 'required|integer|exists:users,id',
            'message' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,gif,mp3,mp4,mkv|max:20480', // max 20MB
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $message = new Message();
        $message->sender_id = $request->sender_id;
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $message->file_path = $path;
            $message->file_type = $request->file('file')->getClientMimeType();
        }

        $message->save();

        return response()->json(['message' => 'Message sent successfully!', 'data' => $message], 200);
    }

    public function getMessages($sender_id, $receiver_id)
    {
        $messages = Message::where(function ($query) use ($sender_id, $receiver_id) {
            $query->where('sender_id', $sender_id)->where('receiver_id', $receiver_id);
        })->orWhere(function ($query) use ($sender_id, $receiver_id) {
            $query->where('sender_id', $receiver_id)->where('receiver_id', $sender_id);
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['messages' => $messages], 200);
    }

    public function downloadFile($id)
    {
        $message = Message::find($id);

        if (!$message || !$message->file_path) {
            return response()->json(['error' => 'File not found!'], 404);
        }

        $path = storage_path('app/public/' . $message->file_path);

        return response()->download($path);
    }
}
