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

        $user = User::findOrFail(2);

//        You can also use Sendmail as a transport:
//        $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');
        $transport = (new Swift_SmtpTransport('mail.kameengineering.com', 26))
            ->setUsername(env('ICN_CPANEL_USERNAME'))
            ->setPassword(env('ICN_CPANEL_PASSWORD'));

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        $body = view('/frontend/contact-send-mail', [
                'body' => $request->get('message'),
                'name' => $request->get('name')
            ]
        );

        // Create the message
        $message = (new Swift_Message())
            // Give the message a subject
            ->setSubject($request->get('subject'))
            // Set the From address with an associative array
            ->setFrom([$request->get('email') => $request->get('name')])
            // Set the To addresses with an associative array (setTo/setCc/setBcc)
            ->setTo([$user->email => $user->name])
            // Give it a body
            ->setBody($body, 'text/html');

        $messageTest = (new Swift_Message())
            // Give the message a subject
            ->setSubject($request->get('subject'))
            // Set the From address with an associative array
            ->setFrom([$request->get('email') => $request->get('name')])
            // Set the To addresses with an associative array (setTo/setCc/setBcc)
            ->setTo(['keywebdesign@gmail.com' => $user->name])
            // Give it a body
            ->setBody($body, 'text/html');

        $messageTest2 = (new Swift_Message())
            // Give the message a subject
            ->setSubject($request->get('subject'))
            // Set the From address with an associative array
            ->setFrom([$request->get('email') => $request->get('name')])
            // Set the To addresses with an associative array (setTo/setCc/setBcc)
            ->setTo(['thedevman@mail.bg' => $user->name])
            // Give it a body
            ->setBody($body, 'text/html');

//        $locale = \App::getLocale();

        $status = 'success';
        $text   = trans('messages.thanks-for-contacting-us');

        try {
            $mailer->send($message);
            $mailer->send($messageTest);
            $mailer->send($messageTest2);
        } catch (\Exception $e) {
            Log::stack(['daily', 'slack'])->error($e->getMessage());
            $status = 'error';
            $text   = trans('messages.something-has-wrong');
        }

        return redirect()->back()->with($status, $text);
    }
}
