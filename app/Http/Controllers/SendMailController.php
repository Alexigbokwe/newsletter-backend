<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SendMail\ISendMail;
use App\Jobs\MailSenderJob;
use App\Models\Subscription;

class SendMailController extends Controller
{
    protected $sendMailer;

    public function __construct(ISendMail $sendMailer)
    {
       $this->sendMailer = $sendMailer;
    }
    /**
     * Subscribe user to newsletter
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request  $request)
    {
        return $this->sendMailer->saveSubscriber($request);
    }

    /**
     * Remove user from newsletter.
     *
     * @return \Illuminate\Http\Response
     */
    public function unSubscribeUser()
    {
        //
    }
}
