<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

// 这里需要继承 JWT 的middleware
class RefreshToken extends BaseMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     * @throws \Tymon\JWTAuth\Exceptions\JWTException
     */
    public function handle($request, Closure $next)
    {
        //检查此次请求中是否带有token,如果没有，则抛出异常
        $this->checkForToken($request);
        try {
            //     检测用户的登录状态，如果正常 则通过
            if ($this->auth->parseToken()->authenticate()) {
                return $next($request);
            }
            throw new UnauthorizedHttpException('jwt-auth', '未登录');
        } catch (TokenExpiredException $except) {
            //     如果此处 捕获到了 token 过期所抛出的 TokenExpiredException 异常 ，   我们在这里需要做的就是刷新该用户的 token 并将它添加到响应头中
            try {
                //     刷新用户token
                $token = $this->auth->refresh();
                //     使用一次性登录 以保证此次请求的成功
                Auth::guard('api')->onceUsingId($this->auth->manager()->getPayloadFactory()->buildClaimsCollection()
                    ->toPlainArray()['sub']);
            } catch (JWTException $exception) {
                //      如果捕获到此异常 即代表 refresh 也过期了，用户无法刷新令牌，需要重新登录了
                throw  new  UnauthorizedHttpException('jwt-auth', $exception->getMessage());
            }
            return $this->setAuthenticationHeader($next($request), $token);
        }
    }
}
