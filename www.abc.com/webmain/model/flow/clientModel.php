<?php

class flow_clientClassModel extends flowModel
{
	public function initModel(){
	    $this->business_type = array('概算','预算','控制价','变更签证','结算','财务决算','期中支付','全过程','跟踪审计','框架协议');//业务类型
	    $this->industry = array('建筑','学校');//行业
	    $this->area = array('珠海','深圳','东莞','广东','中山','惠州','厦门','安徽','西安','阳江');//地区
	}

    public function flowrsreplace($rs){
        if(isset($rs['business_type'])){
            $business_type = explode(',',$rs['business_type']);
            $for_business_type = '';
            for($index=0;$index<count($business_type);$index++){
                $for_business_type .= $this->business_type[$business_type[$index]].',';
            }
            $rs['business_type'] = rtrim($for_business_type,',');
        }
	    if(isset($this->industry[$rs['industry']])){
            $rs['industry'] = $this->industry[$rs['industry']];
        }
        if(isset($this->area[$rs['area']])){
            $rs['area'] = $this->area[$rs['area']];
        }
        return $rs;
    }
    //导入之前判断
    public function flowdaorubefore($rows)
    {

        foreach($rows as $k=>$rs){
            if(isset($rows[$k]['business_type'])){
                $business_type_flip = array_flip($this->business_type);
                $business_type = explode(',',$rows[$k]['business_type']);
                $for_business_type = '';
                for($index=0;$index<count($business_type);$index++){
                    if (isset($business_type_flip[$business_type[$index]])){
                        $for_business_type .= $business_type_flip[$business_type[$index]].',';
                    }
                }
                $for_business_type = rtrim($for_business_type,',');
            }
            $industry_flip = array_flip($this->industry);
            if (isset($industry_flip[$rows[$k]['industry']])){
                $industry = $industry_flip[$rows[$k]['industry']];
            }else{
                $industry = null;
            }
            $area_flip = array_flip($this->area);
            if (isset($area_flip[$rows[$k]['area']])){
                $area = $area_flip[$rows[$k]['area']];
            }else{
                $area = null;
            }
            $rows[$k]['area'] = $area;
            $rows[$k]['industry'] = $industry;
            $rows[$k]['business_type'] = $for_business_type;
            $rows[$k]['update_id'] = $this->adminid;
            $rows[$k]['uid'] = $this->adminid;
            $rows[$k]['create_name'] = $this->adminname;
            $rows[$k]['update_name'] = $this->adminname;
        }

        return $rows;
    }

}