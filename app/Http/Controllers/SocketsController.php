<?php

namespace App\Http\Controllers;

use App\Events\SendMessage;
use Illuminate\Http\Request;

class SocketsController extends Controller
{
    public function connect(Request $request)
    {
        broadcast(new SendMessage("Bobobek Turdiyev", $request->text, "05/06/2024 12:20"));
        return response()->json(['status' => 'Message Sent!']);
    }
}
