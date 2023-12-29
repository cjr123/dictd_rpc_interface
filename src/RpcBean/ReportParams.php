<?php

namespace Yyk\Dictc\RpcBean;

class ReportParams extends BaseReport
{
    public $mediacCheck;    //检查类型（基本无用）
    public $updateTime; //更新时间
    public $remarks;    //备注（基本无用）
    public $studyUid;   //YYK生成的studyUid（基本无用）
    public $studyTime;  //检查时间
    public $mediacItem; //检查部位，如头部
    public $medicDevice;    //拍片设备类型 如：CT
    public $pacsHospital;   //对应pasc那边记录的医院编码（基本无用）
    public $studyId;    //Dcm文件中对检查的标识（基本无用）
    public $department; //就诊科室
    public $symptom;    //患者主诉
    public $printfilm;  //是否己打印完胶片（基本无用）
    public $printreport; //是否打印完报告（基本无用）
    public $patientNumber;  //门诊号（就诊号）（基本无用）
    public $hospitalNumber; //住院号（基本无用）
    public $examUid;    //YYK生成患者一次检查唯一id（基本无用）
    public $regPaperNum;    //报告单号
    public $reportPaperNum; //申请单号
    public $study_id;   //YYK系统内部对检查的唯一标识编码（基本无用）
    public $pmh;    //既往病史
    public $operateDoctorCode;  //操作技师编码
    public $operateDoctorName;  //操作技师名称
    public $reportIndex;    //报告版本（0:根据图片生成的假报告，>=1:pacs推送的报告版本）
    public $patientIsSent;  //影像推送状态（0：未推送，1：推送成功，2：推送但未成功）
    public $reportIsSent;   //报告推送状态（0：未推送，1：推送成功，2：推送但未成功）
//    public $addTime;

    //扩展表中的字段
    public $from_hospital;  //分院名称
    public $source_name;    //就诊部门，如：住院部、体检部、门诊部
    public $bed_number; //床号
    public $scan_type;  //影像扫描类型
    public $img_print_date; //影像打印时间 Y-m-d H:i:s
    public $report_print_date;  //报告打印时间 Y-m-d H:i:s
    public $review_date;    //报告审核时间 Y-m-d H:i:s
    public $study_uid_hospital; //医院原始studyUid
    public $province_code;  //省统一编码
    public $province_code_bodypart; //省统一部位编码

    //患者表中的字段
    public $name;   //患者姓名
    public $sex;    //患者性别
    public $age;    //年龄
    public $weight; //体重
    public $birthday;   //出生日期
//    public $study_uid;                 //YYK理论全国唯一，患者一次拍片ID
//    public $hospital_encoding;                 //医院编号
    public $patient_code_yyk;   //云医康中患者唯一ID6
    public $patient_code_pacs;  //医院PACS中患者唯一ID（有的医院值固定）
    public $phone;  //手机号
    public $id_card;    //身份证号
}