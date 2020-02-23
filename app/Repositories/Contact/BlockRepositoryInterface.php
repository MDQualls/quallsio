<?php
namespace App\Repositories\Contact;

use App\Block;

interface BlockRepositoryInterface
{
    /**
     * @param $ip
     * @return Block|null
     */
    public function get($ip);

    /**
     * @param $ip
     * @return mixed
     */
    public function insert($ip);
}
