<?php

namespace App\Middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class Cache implements IMiddleware {

    public function handle(Request $request): void 
    {
    
        header('Cache-Control: max-age=120');
        

    }
}