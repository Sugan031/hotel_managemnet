<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Middleware\Log;
class addCustomHeader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

        // $request->headers->set('X-Custom-Header', 'Hello from Middleware!');
     
        // // Pass data to the view
        // view()->share('message', 'This message comes from the middleware.');

        // Modify the response by adding a custom header
        $response = $next($request);
        $response->headers->set('X-Custom-Response-Header', 'Modified Response Header');
    
        // Modify the content of the response
        $content = $response->getContent();
        $modifiedContent = str_replace('Hello', 'Modified Hello', $content);
        $response->setContent($modifiedContent);
    
        return $response;
    }
}
