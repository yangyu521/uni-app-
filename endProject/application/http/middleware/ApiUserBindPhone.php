<?php

namespace app\http\middleware;

class ApiUserBindPhone
{
    public function handle($request, \Closure $next)
    {
        // $param = $request->userTokenUserInfo;
        // (new User()) -> OtherLoginIsBindPhone($param);
        // return $next($request);
        if($request->userId < 1) TApiException( '请先绑定手机',20008);
        return $next($request);
    }
}
