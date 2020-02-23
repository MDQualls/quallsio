<?php

namespace App\Services\Notification;

use App\Contacts;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactAlertService implements ContactAlertServiceInterface
{
    /**
     * @var string
     */
    private $emailTo = "mqualls@gmail.com";


    public function sendAlert(Contacts $contact)
    {
        Mail::to($this->emailTo)->send(new ContactMessage($contact));
    }
}
