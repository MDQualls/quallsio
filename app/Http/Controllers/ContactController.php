<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Repositories\Contact\ContactRepositoryInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function create(ContactRequest $request)
    {
        $this->contactRepository->create($request);

        return redirect()->route('home');
    }
}
