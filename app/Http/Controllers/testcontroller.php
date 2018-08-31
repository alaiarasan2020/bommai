<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class testcontroller extends Controller
{
    public function index()
    {
      Mail::raw("test mail",function($message){
        $message->from("mail2latechsolutions@gmail.com");

$message->to("mail2latechsolutions@gmail.com");
        $message->cc("alaimobile2020@gmail.com");
        $message->subject("test mail subject");
      });
    }
}
