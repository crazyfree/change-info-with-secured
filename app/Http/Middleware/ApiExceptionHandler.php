<?php

namespace App\Http\Middleware;

use Closure;

class ApiExceptionHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            return $next($request);
        }
        catch(\HttpException $e) {
            return response()->json(['message' => $e->getErrors(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 403);
        }
        catch(Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['message' => $e->getMessage(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 498);
        }
        catch(Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['message' => $e->getMessage(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 498);
        }
        catch(Tymon\JWTAuth\Exceptions\TokenBlacklistedException $e) {
            return response()->json(['message' => $e->getMessage(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 498);
        }
        catch(\Exception $e) {
            //throw $e;
            if($e->getCode())
                return response()->json(['message' => $e->getMessage(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 400);
            else
                return response()->json(['message' => $e->getMessage(), 'File' => $e->getFile(), 'Line' => $e->getLine()], 400);
        }
    }
}
