<?php

namespace YykRpc\RpcInterface;


use YykRpc\RpcBean\BaseReport;
use YykRpc\RpcResult\RpcResult;

interface ReportServerInterface
{
    public function writeBackReport(BaseReport $reportParams):RpcResult;
}