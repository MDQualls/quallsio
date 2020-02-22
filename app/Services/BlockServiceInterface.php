<?php
namespace App\Services;

interface BlockServiceInterface
{
    /**
     * @param $ip
     * @return bool
     */
    public function isBlocked($ip) : bool;
}
