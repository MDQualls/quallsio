<?php

namespace App\Http\Middleware;

use App\Services\BlockServiceInterface;
use Closure;
use Request;

class VerifyIpNotBlocked
{
    /**
     * @var BlockServiceInterface
     */
    private $blockService;

    public function __construct(BlockServiceInterface $blockService)
    {
        $this->blockService = $blockService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = Request::ip();

        if($this->blockService->isBlocked($ip))  {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
