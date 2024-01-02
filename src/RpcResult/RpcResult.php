<?php

namespace YykRpc\RpcResult;

class RpcResult
{
    public $beSuccess;
    public $errMsg;
    public $data;

    public function __construct(bool $beSuccess, string $errMsg, $data = [])
    {
        $this->beSuccess = $beSuccess;
        $this->errMsg = $errMsg;
        $this->data = $data;
    }
}