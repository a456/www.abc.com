<?php

class flow_project_contractClassModel extends flowModel
{
	public function initModel(){
	    $this->is_frame = array('否','是');//是否框架协议
	    $this->business_stype = array('概算','预算','控制价','变更签证','结算','财务决算','其中支付','全过程','跟踪审计','框架协议');//业务类型
	    $this->engineering_type = array('市政','房建','公路','轨道','圆林绿化');//工程类型
	    $this->service_type = array('编制预算','审核竣工决算','编制估算','编制标底','审核预算','编制概算','审核估算','审核标底','编制结算','审核概算','编制项目建议书与可行性研究报告','审核变更签证','审核结算','受理法院委托鉴定工程造价','其它咨询服务','编制变更签证','编制竣工决算','受委托进度款监管','全过程咨询服务');//服务类型
	    $this->is_record = array('否','是');//是否备案
	    $this->is_approve = array('否','是');//是否审批
	    $this->is_settlement = array('否','是');//是否结算
	    $this->contract_status = array('待签订','已付清','待归档','已归档');//合同状态

	}

    public function flowrsreplace($rs){
	    if(isset($this->is_frame[$rs['is_frame']])){
            $rs['is_frame'] = $this->is_frame[$rs['is_frame']];
        }
        if(isset($this->business_stype[$rs['business_type']])){
            $rs['business_type'] = $this->business_stype[$rs['business_type']];
        }
        if(isset($this->engineering_type[$rs['engineering_type']])){
            $rs['engineering_type'] = $this->engineering_type[$rs['engineering_type']];
        }
        if(isset($rs['service_type'])){
            $service_type = explode(',',$rs['service_type']);
            $for_service_type = '';
            for($index=0;$index<count($service_type);$index++){
                $for_service_type .= $this->service_type[$service_type[$index]].',';
            }
            $rs['service_type'] = rtrim($for_service_type,',');
        }
        if(isset($this->is_record[$rs['is_record']])){
            $rs['is_record'] = $this->is_record[$rs['is_record']];
        }
        if(isset($this->is_approve[$rs['is_approve']])){
            $rs['is_approve'] = $this->is_approve[$rs['is_approve']];
        }
        if(isset($this->is_settlement[$rs['is_settlement']])){
            $rs['is_settlement'] = $this->is_settlement[$rs['is_settlement']];
        }
        if(isset($this->contract_status[$rs['contract_status']])){
            $rs['contract_status'] = $this->contract_status[$rs['contract_status']];
        }
        return $rs;
    }

    //导入之前
    public function flowdaorubefore($rows)
    {
        foreach($rows as $k=>$rs){
            $custname = trim($rows[$k]['custname']);
            $name = m('client')->getone("name='$custname'", 'id');
            if (isset($name['id'])) {
                $name = $name['id'];
            }
            $is_frame_flip = array_flip($this->is_frame);
            if (isset($is_frame_flip[$rows[$k]['is_frame']])){
                $rows[$k]['is_frame'] = $is_frame_flip[$rows[$k]['is_frame']];
            }
            $business_stype_flip = array_flip($this->business_stype);
            if (isset($business_stype_flip[$rows[$k]['business_type']])){
                $rows[$k]['business_type'] = $business_stype_flip[$rows[$k]['business_type']];
            }
            $engineering_type_flip = array_flip($this->engineering_type);
            if (isset($engineering_type_flip[$rows[$k]['engineering_type']])){
                $rows[$k]['engineering_type'] = $engineering_type_flip[$rows[$k]['engineering_type']];
            }
            if(isset($rows[$k]['service_type'])){
                $service_type_flip = array_flip($this->service_type);
                $service_type_type = explode(',',$rows[$k]['service_type']);
                $for_service_type = '';
                for($index=0;$index<count($service_type_type);$index++){
                    if (isset($service_type_flip[$service_type_type[$index]])){
                        $for_service_type .= $service_type_flip[$service_type_type[$index]].',';
                    }
                }
                $for_service_type = rtrim($for_service_type,',');
            }

            $rows[$k]['service_type'] = $for_service_type;
            $rows[$k]['custid'] = $name;
            $rows[$k]['update_id'] = $this->adminid;
            $rows[$k]['uid'] = $this->adminid;
            $rows[$k]['create_name'] = $this->adminname;
            $rows[$k]['update_name'] = $this->adminname;
        }

        return $rows;
    }
}