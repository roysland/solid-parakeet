<?php

namespace App\Middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class Cors implements IMiddleware {

    public function handle(Request $request): void 
    {
    
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');
        header('Access-Control-Max-Age: 86400');
        
        if($request->getMethod() === 'OPTIONS') {
            header('HTTP/1.1 200 OK');
            exit();
        }

    }
}