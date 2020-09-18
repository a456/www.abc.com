<?php
/**
*	模块：project_contract.项目合同，
*	说明：自定义区域内可写您想要的代码，模块列表页面，生成分为2块
*	来源：流程模块→表单元素管理→[模块.项目合同]→生成列表页
*/
defined('HOST') or die ('not access');
?>
<script>
$(document).ready(function(){
	{params}
	var modenum = 'project_contract',modename='项目合同',isflow=0,modeid='76',atype = params.atype,pnum=params.pnum;
	if(!atype)atype='';if(!pnum)pnum='';
	var fieldsarr = [{"name":"\u7533\u8bf7\u4eba","fields":"base_name"},{"name":"\u7533\u8bf7\u4eba\u90e8\u95e8","fields":"base_deptname"},{"name":"\u5355\u53f7","fields":"sericnum"},{"fields":"id","name":"\u5408\u540cid","fieldstype":"number","ispx":"0","isalign":"0","islb":"1"},{"fields":"custid","name":"\u5ba2\u6237\u53f7","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"custname","name":"\u5ba2\u6237\u540d\u79f0","fieldstype":"selectdatafalse","ispx":"1","isalign":"0","islb":"1"},{"fields":"num","name":"\u5408\u540c\u7f16\u53f7","fieldstype":"num","ispx":"1","isalign":"0","islb":"1"},{"fields":"contract_name","name":"\u5408\u540c\u540d\u79f0","fieldstype":"text","ispx":"1","isalign":"0","islb":"1"},{"fields":"is_frame","name":"\u662f\u5426\u6846\u67b6\u534f\u8bae","fieldstype":"select","ispx":"1","isalign":"0","islb":"1"},{"fields":"business_type","name":"\u4e1a\u52a1\u7c7b\u578b","fieldstype":"select","ispx":"0","isalign":"0","islb":"0"},{"fields":"engineering_type","name":"\u5de5\u7a0b\u7c7b\u578b","fieldstype":"select","ispx":"0","isalign":"0","islb":"0"},{"fields":"service_type","name":"\u670d\u52a1\u7c7b\u578b","fieldstype":"checkboxall","ispx":"0","isalign":"0","islb":"1"},{"fields":"contract_amount","name":"\u5408\u540c\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"1"},{"fields":"settlement_price","name":"\u7ed3\u7b97\u4ef7","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_adjustment","name":"\u5408\u540c\u8c03\u6574\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"party","name":"\u7532\u65b9\u7ecf\u529e\u4eba","fieldstype":"text","ispx":"0","isalign":"0","islb":"1"},{"fields":"commission_number","name":"\u59d4\u6258\u53f7","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_starttime","name":"\u5408\u540c\u5de5\u671f\u4ece","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_endtime","name":"\u5408\u540c\u5de5\u671f\u81f3","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"signedtime","name":"\u7b7e\u8ba2\u65e5\u671f","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"1"},{"fields":"is_record","name":"\u662f\u5426\u5907\u6848","fieldstype":"select","ispx":"0","isalign":"0","islb":"0"},{"fields":"is_approve","name":"\u662f\u5426\u5ba1\u6279","fieldstype":"select","ispx":"0","isalign":"0","islb":"0"},{"fields":"is_settlement","name":"\u662f\u5426\u7ed3\u7b97","fieldstype":"select","ispx":"0","isalign":"0","islb":"0"},{"fields":"settlement_time","name":"\u7ed3\u7b97\u65e5\u671f","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"construction_area","name":"\u5efa\u7b51\u9762\u79ef","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"municipal_amount","name":"\u5e02\u653f\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"actual_area","name":"\u5b9e\u9645\u9762\u79ef","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"installed_amount","name":"\u5b89\u88c5\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"decoration_amount","name":"\u88c5\u9970\u88c5\u4fee\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"total_investment","name":"\u603b\u6295\u8d44","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"actual_investment","name":"\u5b9e\u9645\u6295\u8d44","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"build_amount","name":"\u571f\u5efa\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"garden_amount","name":"\u56ed\u6797\u91d1\u989d","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"payment_terms","name":"\u4ed8\u6b3e\u6761\u6b3e","fieldstype":"textarea","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_scope","name":"\u5408\u7ea6\u8303\u56f4","fieldstype":"textarea","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_elements","name":"\u5408\u540c\u8981\u7d20","fieldstype":"textarea","ispx":"0","isalign":"0","islb":"1"},{"fields":"contract_num","name":"\u5408\u540c\u4efd\u6570","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"contract_status","name":"\u5408\u540c\u72b6\u6001","fieldstype":"select","ispx":"0","isalign":"0","islb":"1"},{"fields":"file_box","name":"\u6863\u6848\u76d2","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"results_time","name":"\u6210\u679c\u6587\u4ef6\u65e5\u671f","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"cumulative_collection","name":"\u7d2f\u8ba1\u6536\u6b3e","fieldstype":"number","ispx":"0","isalign":"0","islb":"0"},{"fields":"remarks","name":"\u5907\u6ce8","fieldstype":"textarea","ispx":"0","isalign":"0","islb":"1"},{"fields":"uid","name":"\u521b\u5efa\u7528\u6237id","fieldstype":"hidden","ispx":"0","isalign":"0","islb":"0"},{"fields":"create_time","name":"\u521b\u5efa\u65f6\u95f4","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"update_time","name":"\u4fee\u6539\u65f6\u95f4","fieldstype":"datetime","ispx":"0","isalign":"0","islb":"0"},{"fields":"update_id","name":"\u4fee\u6539\u7528\u6237id","fieldstype":"hidden","ispx":"0","isalign":"0","islb":"0"},{"fields":"create_name","name":"\u521b\u5efa\u7528\u6237","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"},{"fields":"update_name","name":"\u4fee\u6539\u7528\u6237","fieldstype":"text","ispx":"0","isalign":"0","islb":"0"}],fieldsselarr= {"columns_project_contract_":"custname,num,contract_name,is_frame,service_type,contract_amount,party,signedtime,contract_elements,contract_status,remarks,caozuo"};
	
	var c = {
		reload:function(){
			a.reload();
		},
		clickwin:function(o1,lx){
			var id=0;
			if(lx==1)id=a.changeid;
			openinput(modename,modenum,id,'opegs{rand}');
		},
		view:function(){
			var d=a.changedata;
			openxiangs(modename,modenum,d.id,'opegs{rand}');
		},
		searchbtn:function(){
			this.search({});
		},
		search:function(cans){
			var s=get('key_{rand}').value,zt='';
			if(get('selstatus_{rand}'))zt=get('selstatus_{rand}').value;
			var canss = js.apply({key:s,keystatus:zt}, cans);
			a.setparams(canss,true);
		},
		//高级搜索
		searchhigh:function(){
			new highsearchclass({
				modenum:modenum,
				oncallback:function(d){
					c.searchhighb(d);
				}
			});
		},
		searchhighb:function(d){
			d.key='';
			get('key_{rand}').value='';
			a.setparams(d,true);
		},
		//导出
		daochu:function(o1,lx,lx1,e){
			if(!this.daochuobj)this.daochuobj=$.rockmenu({
				width:120,top:35,donghua:false,data:[],
				itemsclick:function(d, i){
					c.daonchuclick(d);
				}
			});
			var d = [{name:'导出全部',lx:0},{name:'导出当前页',lx:1},{name:'订阅此列表',lx:2}];
			this.daochuobj.setData(d);
			var lef = $(o1).offset();
			this.daochuobj.showAt(lef.left, lef.top+35);
		},
		daonchuclick:function(d){
			if(d.lx==0)a.exceldown();
			if(d.lx==1)a.exceldownnow();
			if(d.lx==2)this.subscribelist();
		},
		subscribelist:function(){
			js.subscribe({
				title:'项目合同('+nowtabs.name+')',
				cont:'项目合同('+nowtabs.name+')的列表的',
				explain:'订阅[项目合同]的列表',
				objtable:a
			});
		},
		getacturl:function(act){
			return js.getajaxurl(act,'mode_project_contract|input','flow',{'modeid':modeid});
		},
		changatype:function(o1,lx){
			$("button[id^='changatype{rand}']").removeClass('active');
			$('#changatype{rand}_'+lx+'').addClass('active');
			a.setparams({atype:lx},true);
			nowtabssettext($(o1).html());
		},
		init:function(){
			$('#key_{rand}').keyup(function(e){
				if(e.keyCode==13)c.searchbtn();
			});
			this.initpage();
		},
		initpage:function(){
			
		},
		loaddata:function(d){
			if(!d.atypearr)return;
			get('addbtn_{rand}').disabled=(d.isadd!=true);
			if(d.isdaoru)$('#daoruspan_{rand}').show();
			var d1 = d.atypearr,len=d1.length,i,str='';
			for(i=0;i<len;i++){
				str+='<button class="btn btn-default" click="changatype,'+d1[i].num+'" id="changatype{rand}_'+d1[i].num+'" type="button">'+d1[i].name+'</button>';
			}
			$('#changatype{rand}').html(str);
			$('#changatype{rand}_'+atype+'').addClass('active');
			js.initbtn(c);
		},
		setcolumns:function(fid, cnas){
			var d = false,i,ad=bootparams.columns,len=ad.length,oi=-1;
			for(i=0;i<len;i++){
				if(ad[i].dataIndex==fid){
					d = ad[i];
					oi= i;
					break;
				}
			}
			if(d){
				d = js.apply(d, cnas);
				bootparams.columns[oi]=d;
			}
		},
		daoru:function(){
			window.managelistproject_contract = a;
			addtabs({num:'daoruproject_contract',url:'flow,input,daoru,modenum=project_contract',icons:'plus',name:'导入项目合同'});
		},
		initcolumns:function(bots){
			var num = 'columns_'+modenum+'_'+pnum+'',d=[],d1,d2={},i,len=fieldsarr.length,bok;
			var nstr= fieldsselarr[num];if(!nstr)nstr='';
			if(nstr)nstr=','+nstr+',';
			if(nstr=='' && isflow==1){
				d.push({text:'申请人',dataIndex:'base_name',sortable:true});
				d.push({text:'申请人部门',dataIndex:'base_deptname',sortable:true});
			}
			for(i=0;i<len;i++){
				d1 = fieldsarr[i];
				bok= false;
				if(nstr==''){
					if(d1['islb']=='1')bok=true;
				}else{
					if(nstr.indexOf(','+d1.fields+',')>=0)bok=true;
				}
				if(bok){
					d2={text:d1.name,dataIndex:d1.fields};
					if(d1.ispx=='1')d2.sortable=true;
					if(d1.isalign=='1')d2.align='left';
					if(d1.isalign=='2')d2.align='right';
					d.push(d2);
				}
			}
			if(isflow==1)d.push({text:'状态',dataIndex:'statustext'});
			if(nstr=='' || nstr.indexOf(',caozuo,')>=0)d.push({text:'',dataIndex:'caozuo',callback:'opegs{rand}'});
			if(!bots){
				bootparams.columns=d;
			}else{
				a.setColumns(d);
			}
		},
		setparams:function(cs){
			var ds = js.apply({},cs);
			a.setparams(ds);
		},
		storeurl:function(){
			var url = this.getacturl('publicstore')+'&pnum='+pnum+'';
			return url;
		},
		printlist:function(){
			js.msg('success','可使用导出，然后打开在打印');
		},
		getbtnstr:function(txt, click, ys, ots){
			if(!ys)ys='default';
			if(!ots)ots='';
			return '<button class="btn btn-'+ys+'" id="btn'+click+'_{rand}" click="'+click+'" '+ots+' type="button">'+txt+'</button>';
		},
		setfieldslist:function(){
			new highsearchclass({
				modenum:modenum,
				modeid:modeid,
				type:1,
				isflow:isflow,
				pnum:pnum,atype:atype,
				fieldsarr:fieldsarr,
				fieldsselarr:fieldsselarr,
				oncallback:function(str){
					fieldsselarr[this.columnsnum]=str;
					c.initcolumns(true);
					c.reload();
				}
			});
		}
	};	
	
	//表格参数设定
	var bootparams = {
		fanye:true,modenum:modenum,modename:modename,statuschange:false,tablename:jm.base64decode('cHJvamVjdF9jb250cmFjdA::'),
		url:c.storeurl(),storeafteraction:'storeaftershow',storebeforeaction:'storebeforeshow',
		params:{atype:atype},
		columns:[{text:"合同id",dataIndex:"id"},{text:"客户名称",dataIndex:"custname",sortable:true},{text:"合同编号",dataIndex:"num",sortable:true},{text:"合同名称",dataIndex:"contract_name",sortable:true},{text:"是否框架协议",dataIndex:"is_frame",sortable:true},{text:"服务类型",dataIndex:"service_type"},{text:"合同金额",dataIndex:"contract_amount"},{text:"甲方经办人",dataIndex:"party"},{text:"签订日期",dataIndex:"signedtime"},{text:"合同要素",dataIndex:"contract_elements"},{text:"合同状态",dataIndex:"contract_status"},{text:"备注",dataIndex:"remarks"},{
			text:'',dataIndex:'caozuo',callback:'opegs{rand}'
		}],
		itemdblclick:function(){
			c.view();
		},
		load:function(d){
			c.loaddata(d);
		}
	};
	c.initcolumns(false);
	opegs{rand}=function(){
		c.reload();
	}
	
//[自定义区域start]

c.initpage=function(){
	$('#key_{rand}').parent().before('<td style="padding-right:10px;"><input onclick="js.datechange(this,\'month\')" style="width:110px" placeholder="签约月份" readonly class="form-control datesss" id="dt_{rand}" ></td>');
}
c.searchbtn=function(){
	var dt = get('dt_{rand}').value;
	this.search({dt:dt});
}

c.retotal=function(){
	js.ajax(publicmodeurl(modenum,'remoney'),{},function(s){
		a.reload();
	},'get',false,'更新中...,更新完成')
}

//[自定义区域end]

	js.initbtn(c);
	var a = $('#viewproject_contract_{rand}').bootstable(bootparams);
	c.init();
	var ddata = [{name:'高级搜索',lx:0}];
	if(admintype==1)ddata.push({name:'自定义列显示',lx:2});
	ddata.push({name:'打印',lx:1});
	$('#downbtn_{rand}').rockmenu({
		width:120,top:35,donghua:false,
		data:ddata,
		itemsclick:function(d, i){
			if(d.lx==0)c.searchhigh();
			if(d.lx==1)c.printlist();
			if(d.lx==2)c.setfieldslist();
		}
	});
	
	
});
</script>
<!--SCRIPTend-->
<!--HTMLstart-->
<div>
	<table width="100%">
	<tr>
		<td style="padding-right:10px;" id="tdleft_{rand}" nowrap><button id="addbtn_{rand}" class="btn btn-primary" click="clickwin,0" disabled type="button"><i class="icon-plus"></i> 新增</button></td>
		<td>
			<input class="form-control" style="width:160px" id="key_{rand}" placeholder="关键字">
		</td>
		
		<td style="padding-left:10px">
			<div style="width:85px" class="btn-group">
			<button class="btn btn-default" click="searchbtn" type="button">搜索</button><button class="btn btn-default" id="downbtn_{rand}" type="button" style="padding-left:8px;padding-right:8px"><i class="icon-angle-down"></i></button> 
			</div>
		</td>
		<td  width="90%" style="padding-left:10px"><div id="changatype{rand}" class="btn-group"></div></td>
	
		<td align="right" id="tdright_{rand}" nowrap>
			<span style="display:none" id="daoruspan_{rand}"><button class="btn btn-default" click="daoru,1" type="button">导入</button>&nbsp;&nbsp;&nbsp;</span><button class="btn btn-default" click="daochu" type="button">导出 <i class="icon-angle-down"></i></button>
		</td>
	</tr>
	</table>
</div>
<div class="blank10"></div>
<div id="viewproject_contract_{rand}"></div>
<!--HTMLend-->