<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $message = strtolower(trim($request->message));
        $reply = 'Sorry, I can only respond to "hi" right now.';
        if ($message === 'hi') {
            $reply = 'Hello!';
        }
        return response()->json([
            'reply' => $reply
        ]);
    }
}
