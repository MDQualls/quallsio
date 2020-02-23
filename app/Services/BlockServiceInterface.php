<?php
namespace App\Services;

interface BlockServiceInterface
{
    /**
     * @param $ip
     * @return bool
     */
    public function isBlocked($ip) : bool;

    /**
     * @param $ip
     * @return bool
     */
    public function shouldBlock($ip) : bool;
}
