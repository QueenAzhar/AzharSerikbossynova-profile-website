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
           'title' => 'Mail from Sdu',
           'body' => 'This is for testing'
       ];

       Mail::to("190103063@stu.sdu.edu.kz")->send(new DemoMail($details));
       return "Email sent";
    }
}