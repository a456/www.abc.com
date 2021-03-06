<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title><?php echo ($name); ?> <?php echo ($site_name); ?> <?php echo ($site_seo_title); ?>  </title>
  <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
  <meta name="description" content="<?php echo ($site_seo_description); ?>" />
  <link rel="icon" href="./themes/simplebootx/public/images/favicon_1409967740.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="./themes/simplebootx/public/images/favicon_1409967740.ico" type="image/x-icon" media="screen"/>
  <link href="./themes/simplebootx/public/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" media="screen" href="./themes/simplebootx/public/css/common.css" />
  <link rel="stylesheet" media="screen" href="./themes/simplebootx/public/css/main.css" />
  <link rel="stylesheet" media="screen" href="./themes/simplebootx/public/css/es-icon.css" />
  <link rel="stylesheet" media="screen" href="./themes/simplebootx/public/css/iconfont.css" />
  <link rel="stylesheet" media="screen" href="./themes/simplebootx/public/css/theme.css" />
  <!--[if lt IE 9]>
    <script src="./themes/simplebootx/public/js/html5shiv.js"></script>
    <script src="./themes/simplebootx/public/js/respond.min.js"></script>
  <![endif]-->
</head>
<body >
  <div class="es-wrap">
    <header class="navbar">
      <div class="container">
        <div class="clearfix navbar-top">
           <a href="/"><img src="./themes/simplebootx/public/images/logo.gif"  class="pull-left logo-left"></a>
            <a class="pull-right hidden-xs"><i class="iconfont icon-mianfeidianhua icon"></i>
               <span class="telephone">全国服务热线：15562315180</span>
            </a>
          </div>
      </div>
      <nav class="nav-collapse">
        <div class="container">
          <div class="navbar-header">
             <ul class="nav navbar-left navbar-collapse collapse" role="navigation">
                <li class=""><a href="/" class=""  >首页 </a></li>
                <?php if(is_array($top_type)): $i = 0; $__LIST__ = $top_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dropdown"><a href="#" class="dropdown-toggle "   data-toggle="dropdown" ><?php echo ($vo['name']); ?>  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="<?php echo u('course/Course/coursecenter',array('typeid'=>$sub['term_id']));?>" ><?php echo ($sub["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
                  </ul><?php endforeach; endif; else: echo "" ;endif; ?>
                <li class=""><a href="<?php echo u('Portal/Index/article');?>" class=""  >教育资讯 </a></li>
                <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""><a href="<?php echo (sp_get_href($vo['href'])); ?>" class=""  ><?php echo ($vo['label']); ?> </a></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
          </div>
          <div class="navbar-user hidden-xs">
           <?php if(session('?user')): ?><ul class="nav navbar-nav navbar-right" >
               <li><a href="<?php echo u('User/Center/index');?>" class="nav-study">我的教室</a></li>
               <li class="info-img"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     <?php if(empty($avatar)): ?><img src="./themes/simplebootx/public/images/093958e59110293063.jpg" class="img-circle"/>
			         <?php else: ?>
				        <img src="<?php echo sp_get_user_avatar_url($avatar);?>?t=<?php echo time();?>" class="img-circle"/><?php endif; ?>                  
                    <span><?php echo ($user_nicename); ?></span>
                    <i class="iconfont icon-xia"></i>
                    </a>
                    <ul class="dropdown-menu menu-ul" role="menu">
                       <li><a href="<?php echo u('User/Center/setting');?>"><i class="iconfont icon-shezhi"></i>个人设置</a></li>
                       <li><a href="<?php echo u('user/center/count');?>"><i class="iconfont icon-001"></i> 账户中心</a></li>
                       <li><a href="<?php echo U('user/index/logout');?>"><i class="iconfont icon-tuichu"></i>退出登录</a></li>
                    </ul>
                </li>
               
              </ul>
           <?php else: ?>  
             <ul class="nav navbar-nav navbar-right">
                 <li><a href="<?php echo u('User/Login/index');?>"> 登录</a></li>
                 <li>｜</li>
                 <li><a href="<?php echo u('User/Register/index');?>">注册</a></li>
             </ul><?php endif; ?>	
          </div>
        </div>
      </nav>
    </header>  
  <div id="content-container" class="container">
       <?php if(empty($avatar)): ?><div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>您还没有头像</strong>。拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href="<?php echo u('user/center/pic');?>"" class="alert-link" target="_blank">点击设置</a>
	  </div>
	  <?php else: ?>
	    <?php if(empty($user['user_nicename'])): ?><div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>您还没设置昵称</strong>。请到个人设置里面设置～～ <a href="<?php echo u('user/center/setting');?>" class="alert-link" target="_blank">点击设置</a>
         </div><?php endif; endif; ?>
      <div class="row row-3-9">
        <div class="col-md-3">
           <div class="sidenav">
             <ul class="list-group">
               <li class="list-group-heading">我的学习</li>
               <li class="list-group-item "><a href="<?php echo u('user/center/index');?>">我的课程</a></li>
               <li class="list-group-item  active"><a href="<?php echo u('user/center/jihuo');?>">激活课程</a></li>
               <li class="list-group-heading" style="margin-top:10px;">个人设置</li>
               <li class="list-group-item "><a href="<?php echo u('user/center/setting');?>"> 基础信息</a></li>
               <li class="list-group-item "><a href="<?php echo u('user/center/pic');?>">头像设置</a></li>
               <li class="list-group-item "><a href="<?php echo u('user/center/security');?>">修改密码</a></li>          
               <li class="list-group-heading" style="margin-top:10px;">账户中心</li>
               <li class="list-group-item "><a href="<?php echo u('user/center/count');?>">我的账户</a></li>
               <li class="list-group-item "><a href="<?php echo u('user/center/order');?>">我的订单</a></li>
               <li class="list-group-item"><a href="<?php echo u('user/center/card');?>">点卡充值</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-9">	
          <div class="panel panel-default panel-col">
	        <div class="panel-heading">激活课程</div>
             <div class="panel-body">
             <br>  
            <form class="form-horizontal js-ajax-form" action="<?php echo U('user/center/jihuo_post');?>" method="post">
               <div class="form-group">   
                 <div class="col-md-3 control-label">
                   <label for="money_card_secret">激活码</label>
                 </div>
                 <div class="controls col-md-7">
                    <input type="text" name="card_name" required="required" class="form-control">
                    <p class="help-block">请输入课程激活码</p>
                 </div>
              </div>
             <div class="form-group">
                <div class="col-md-3 control-label">
                  <label for="captcha_num">验证码</label>
                </div>
                <div class="controls col-md-4">
                   <input class="form-control input-lg " type="text" id="input_verify" name="verify">
                   
                   <p class="help-block">请输入右侧的验证码</p>
                </div>
                <div class="col-md-5">
		              <?php echo sp_verifycode_img('length=4&font_size=14&width=100&height=34&charset=2345678&use_noise=1&use_curve=0');?>
                </div>
             </div>
             <div class="form-group">
               <div class="controls col-md-offset-3">
        	      <div class=" col-md-4">
	              <button id="card-use-btn" class=" btn btn-primary js-ajax-submit" type="submit">使用</button>
        	      </div>
               </div>
              </div>
             </form>
           </div>
	      </div>
         </div>
       </div>
    </div>
<script type="text/javascript">
var GV = {
    DIMAUB: "/",
    JS_ROOT: "public/js/",
    TOKEN: ""
};
</script>
<script>
	  
</script>
<script src="/public/js/jquery.js"></script>
<script src="/public/js/wind.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/frontend.js"></script>
  <div class="es-footer-link">
   <div class="container">
     <div class="row">
       <div class="col-md-12 footer-main clearfix">
       <?php if(is_array($dnav)): $i = 0; $__LIST__ = $dnav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="link-item ">
           <h3><?php echo ($vo['label']); ?></h3>
           <ul>
            <?php if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (sp_get_href($sub['href'])); ?>" target="_blank"><?php echo ($sub['label']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
         </div><?php endforeach; endif; else: echo "" ;endif; ?>  
       
     </div>
     
    </div>
  </div>
</div>
<footer class="es-footer">
  <div class="copyright">
    <div class="container">Powered by <a href="/" target="_blank"><?php echo ($site_name); ?></a>©2016-2018 <a class="mlm" href="/" target="_blank"></a>      
       <div class="mts">课程内容版权均归<a href="/"><?php echo ($site_name); ?>文化传播有限公司</a>
           所有<a class="mlm" href="http://www.miibeian.gov.cn/" target="_blank"><?php echo ($site_icp); ?></a><?php echo ($site_tongji); ?>
       </div>
       
    </div>
  </div>
</footer>    
</div>  
</body>
</html>