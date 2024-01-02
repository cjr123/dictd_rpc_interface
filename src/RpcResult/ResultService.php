<?php

namespace YykRpc\RpcResult;

class ResultService
{
    public static function err(string $errMsg):RpcResult
    {

        return make(RpcResult::class,[false,$errMsg]);

    }

    public static function success($data=[]):RpcResult
    {
        return make(RpcResult::class,[true,'成功',$data]);
    }

}