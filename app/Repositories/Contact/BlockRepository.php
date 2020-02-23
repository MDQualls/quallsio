<?php
namespace App\Repositories\Contact;

use App\Block;

class BlockRepository implements BlockRepositoryInterface
{
    /**
     * @var Block
     */
    private $block;

    public function __construct(Block $block)
    {
        $this->block = $block;
    }

    /**
     * @param $ip
     * @return Block|null
     */
    public function get($ip)
    {
        if(trim($ip) == "")  {
            return null;
        }

        return $this->block::where('ip_address', '=', $ip)->first();
    }

    /**
     * @param $ip
     * @return mixed
     */
    public function insert($ip)
    {
       return $this->block::create([
            'ip_address' => $ip,
        ]);
    }
}
