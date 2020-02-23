<?php
namespace App\Services;

use App\Repositories\Contact\BlockRepositoryInterface;
use App\Repositories\Contact\ContactRepositoryInterface;
use Carbon\Carbon;

class BlockService implements BlockServiceInterface
{
    /**
     * @var BlockRepositoryInterface
     */
    private $blockRepository;

    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    public function __construct(
        BlockRepositoryInterface $blockRepository,
        ContactRepositoryInterface $contactRepository
    ){
        $this->blockRepository = $blockRepository;
        $this->contactRepository = $contactRepository;
    }

    /**
     * test to see if an IP address has been blocked
     * @param $ip
     * @return bool
     */
    public function isBlocked($ip) : bool
    {
        return $this->blockRepository->get($ip) ? true : false;
    }

    /**
     * test to see if an IP address should be blocked and if so, block it
     * @param $ip
     * @return bool
     */
    public function shouldBlock($ip) : bool
    {
        $contacts = $this->contactRepository->getIpForToday($ip);

        $last5Minutes = Carbon::now()->subMinutes(5)->toDateTimeString();
        $contactLast5Minutes = 0;
        foreach ($contacts as $contact)  {
            if($contact->created_at >= $last5Minutes)  {
                $contactLast5Minutes++;
            }
        }

        if($contactLast5Minutes > 3)  {
            $this->blockRepository->insert($ip);
            return true;
        } else {
            return false;
        }
    }
}
