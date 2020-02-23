<?php

namespace App\Services\Notification;

use App\Contacts;

interface ContactAlertServiceInterface
{
    public function sendAlert(Contacts $contact);
}
