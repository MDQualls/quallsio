<?php
namespace App\Services;

use App\Repositories\Contact\BlockRepositoryInterface;

class BlockService implements BlockServiceInterface
{
    /**
     * @var BlockRepositoryInterface
     */
    private $blockRepository;

    public function __construct(BlockRepositoryInterface $blockRepository)
    {
        $this->blockRepository = $blockRepository;
    }

    /**
     * @param $ip
     * @return bool
     */
    public function isBlocked($ip) : bool
    {
        return $this->blockRepository->get($ip) ? true : false;
    }
}
