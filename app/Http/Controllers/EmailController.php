<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $toEmail = 'darylwong720@gmail.com';
        $mailMessage = 'Welcome to our website!';
        $subject = 'Welcome Email';

        $response = Mail::to($toEmail)->send(new WelcomeEmail($mailMessage, $subject));
    }
}
