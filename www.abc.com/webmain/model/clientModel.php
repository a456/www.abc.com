<?php
class clientClassModel extends Model
{
	public function initModel()
	{
		$this->settable('client');
	}
	
	//读取我的客户和共享给我的
	public function getmycust($uid, $id=0)
	{
        $where 	= '`uid`='.$uid;
        $rows 	= m('client')->getrows($where, 'id as value,name,id','name');
        return $rows;
	}
}