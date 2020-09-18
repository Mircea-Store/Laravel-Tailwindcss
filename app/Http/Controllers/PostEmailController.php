<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostEmailController extends Controller
{
    //post email
    public function postemail(Request $request)
    {
        $details = [
            'username'     => $request->get("username"),
            'useremail'    => $request->get("useremail"),
            'usermessage'  => $request->get("usermessage")
        ];

        // Mail::to('Georgeoustar@gmail.com')->send(new \App\Mail\PostMail($details));
        $to = "Georgeoustar@gmail.com";
        $subject = $details['username'];
        $txt = $details['usermessage'];
        $headers = 'From: '.$details['useremail'] . "\r\n" .
            'Reply-To: '.$details['useremail'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $txt, $headers);

        print_r(json_encode("success"));
    }
}
