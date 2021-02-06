<?php

namespace App\Http\Middleware;

use App\Enums\HttpResponses;
use Closure;
use Illuminate\Http\Request;

class HasOperation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has('operation')) {
            $response = [
                'error' => 'Calculation error',
                'message' => 'Invalid operation parameters'
            ];

            return response()->json($response, HttpResponses::HTTP_RESPONSE_BAD_REQUEST);
        }

        return $next($request);
    }
}
