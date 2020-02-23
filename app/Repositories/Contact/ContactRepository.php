<?php
namespace App\Repositories\Contact;

use App\Contacts;
use App\Http\Requests\ContactRequest;
use Request;


class ContactRepository implements ContactRepositoryInterface
{
    /**
     * @var Contacts
     */
    private $contact;

    public function __construct(Contacts $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @param ContactRequest $request
     * @return mixed
     */
    public function create(ContactRequest $request)
    {
        $name = $request->contact_name;
        $email = $request->contact_email;
        $contact = $request->contact_message;
        $category = $request->contact_category;
        $ip = Request::ip();

        $contact = $this->contact::create([
            'contact_name' => $name,
            'contact_email' => $email,
            'contact_message' => $contact,
            'contact_category' => $category,
            'ip_address' => $ip,
        ]);

        return $contact;
    }

    /**
     * @param string $ip
     * @return mixed
     */
    public function getIpForToday($ip)
    {
        $result = $this->contact::where([
            ['ip_address','=',$ip],
            ['created_at','>=',today()],
        ])->get();

        return $result;
    }
}
