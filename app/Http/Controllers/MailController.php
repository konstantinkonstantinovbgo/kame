<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Swift_Message;
use Swift_Mailer;
use Swift_SmtpTransport;
use Log;

class MailController extends Controller
{
    public function htmlEmail(Request $request)
    {
        Log::info($request->all());

        $user = User::findOrFail(1);

//        You can also use Sendmail as a transport:
//        $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
        $transport = (new Swift_SmtpTransport('mail.kameengineering.com', 26))
            ->setUsername(env('ICN_CPANEL_USERNAME'))
            ->setPassword(env('ICN_CPANEL_PASSWORD'));

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create the message
        $message = (new Swift_Message())
            // Give the message a subject
            ->setSubject($request->get('subject'))
            // Set the From address with an associative array
            ->setFrom([$request->get('email') => $request->get('name')])
            // Set the To addresses with an associative array (setTo/setCc/setBcc)
            ->setTo([$user->email => $user->name])
            // Give it a body
            ->setBody($request->get('message'))
        ;
//        $message->setBody(
//            '<html>' .
//            ' <body>' .
//            '  Here is an image <img src="' . // Embed the file
//            $message->embed(new Swift_Image($img_data, 'image.jpg', 'image/jpeg')) .
//            '" alt="Image" />' .
//            '  Rest of message' .
//            ' </body>' .
//            '</html>',
//            'text/html' // Mark the content-type as HTML
//        );

        // Pass a variable name to the send() method
        if (!$mailer->send($message, $failures)) {
            Log::stack(['daily', 'slack'])->error($failures);
            return redirect()->back()->with('error', 'Something has wrong.');
        } else {
            return redirect()->back()->with('success', 'Message was sent successfully');
        }
    }
}
