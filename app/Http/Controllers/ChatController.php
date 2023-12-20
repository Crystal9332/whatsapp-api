<?php

namespace App\Http\Controllers;

class ChatController extends Controller
{
    //Show Chat page
    public function chatShow()
    {
        return view('chat');
    }

}