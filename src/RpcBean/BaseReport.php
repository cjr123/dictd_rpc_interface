<?php

namespace YykRpc\RpcBean;

class BaseReport
{
    public $imageReportCode; //云医康影像报告编码
    public $hospitalEncoding;   //医院编码
    public $accessionNumber;    //检查号
    public $examinDoctorCode;   //检查申请医生编码
    public $examinDoctorName;   //检查申请医生名称
    public $writeDoctorCode;    //报告书写医生编码
    public $writeDoctorName;    //报告书写医生名称
    public $confirmDoctorCode;  //审核医生编码
    public $confirmDoctorName;  //审核医生名称
    public $review_date;    //报告审核时间 Y-m-d H:i:s
    public $imageReportText;    //影像所见
    public $diagnosis;  //诊断结果
    public $impression; //意见建议
    public $checkResult;    //检查结果（阴阳性）1阴 2阳
    public $reportTime; //报告书写时间

}