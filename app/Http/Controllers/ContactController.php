<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Repositories\Contact\ContactRepositoryInterface;
use App\Services\Notification\ContactAlertServiceInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * @var ContactRepositoryInterface
     */
    private $contactAlertService;

    public function __construct(
        ContactRepositoryInterface $contactRepository,
         ContactAlertServiceInterface $contactAlertService
    ){
        $this->contactRepository = $contactRepository;
        $this->contactAlertService = $contactAlertService;
    }

    public function create(ContactRequest $request)
    {
        $contact = $this->contactRepository->create($request);

        $this->contactAlertService->sendAlert($contact);

        return redirect()->route('home');
    }
}
