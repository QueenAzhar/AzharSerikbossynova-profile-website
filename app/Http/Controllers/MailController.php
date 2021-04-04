<?php

namespace App\Http\Controllers;


use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendEmail()
    {
       $details = [
           'title' => 'Mail from Susrfside',
           'body' => 'This is for testing'
       ];

       Mail::to("laura.daurenova01@gmail.com")->send(new DemoMail($details));
       return "Email sent";
    }
}