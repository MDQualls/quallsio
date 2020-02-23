<?php
namespace App\Repositories\Contact;

use App\Http\Requests\ContactRequest;

interface ContactRepositoryInterface
{
    public function create(ContactRequest $request);

    public function getIpForToday($ip);
}
