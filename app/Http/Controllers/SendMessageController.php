<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMessage;

class SendMessageController extends Controller
{
  	/**
     * Send message.
     *
     * @param  string $message
     * @return 
     */
    public function send()
    {
        SendMessage::dispatch('Test')->delay(60);
    }
}
