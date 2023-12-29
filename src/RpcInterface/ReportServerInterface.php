<?php

namespace Yyk\Dictc\RpcInterface;


use Yyk\Dictc\RpcBean\BaseReport;
use Yyk\Dictc\RpcResult\RpcResult;

interface ReportServerInterface
{
    public function writeBackReport(BaseReport $reportParams):RpcResult;
}