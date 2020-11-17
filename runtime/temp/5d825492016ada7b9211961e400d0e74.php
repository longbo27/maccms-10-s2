<?php if (!defined('THINK_PATH')) exit(); /*a:9:{s:32:"template/stui/html/vod/show.html";i:1582293317;s:66:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/seo/vod_show.html";i:1582099509;s:67:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/include.html";i:1581922827;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/head.html";i:1585442082;s:67:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/vod_box.html";i:1571642884;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/page.html";i:1539164314;s:70:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/side_media.html";i:1582195759;s:74:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/vod_box_media1.html";i:1544028352;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/foot.html";i:1585442114;}*/ ?>
<!DOCTYPE html>
<html>
<head>
      <title><?php echo mac_default($obj['type_title'],$obj['type_name']); ?> - <?php echo $maccms['site_name']; ?></title>
  <meta name="keywords" content="<?php echo mac_default($obj['type_key'],$obj['type_name']); ?>,<?php echo $maccms['site_name']; ?>" />
  <meta name="description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />
  <meta itemprop="url" property="og:url" content="<?php echo mac_url_type($obj); ?>" />
  <meta itemprop="name" property="og:title" content="<?php echo mac_default($obj['type_title'],$obj['type_name']); ?> - <?php echo $maccms['site_name']; ?>" />
  <meta itemprop="image" property="og:image" content="<?php echo $maccms['path']; ?>statics/img/logo.png" />
  <meta itemprop="description" property="og:description" content="<?php echo mac_default($obj['type_des'],$maccms['site_description']); ?>" />   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
<link rel="stylesheet" href="/statics/font/iconfont.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_block.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_block_color.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_default.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/myui.css" type="text/css" />
<link rel="stylesheet" href="/statics/css/stui_user.css" type="text/css" />
<script type="text/javascript" src="/statics/js/jquery.min.js"></script>
<script type="text/javascript" src="/statics/js/stui_default.js"></script>
<script type="text/javascript" src="/statics/js/stui_block.js "></script>
<script type="text/javascript" src="/statics/js/home.js"></script>
<script type="text/javascript" src="/statics/js/formValidator-4.0.1.js"></script>
<script type="text/javascript" src="/statics/js/down.js"></script>
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>
<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
			function divrefresh() {
				var m1 = document.getElementById('movie1');
				var m2 = document.getElementById('movie2');
				if(m1.style.display == 'block') {
					m1.style.display = 'none';
					m2.style.display = 'block';
				} else if(m2.style.display == 'block') {
					m2.style.display = 'none';
					m1.style.display = 'block';
				} 
			}
</script>
</head>
<body>
	<header class="stui-header__top clearfix">
	<div class="stui-header__bar clearfix">
		<div class="container">
	        <div class="row">
				<div class="stui-header__logo">
					<a class="logo" href="<?php echo $maccms['path']; ?>"></a>
				</div>				
				<div class="stui-header__search">
					<script type="text/javascript" src="<?php echo $maccms['path']; ?>statics/js/jquery.autocomplete.js"></script>
					 <form id="search" name="search" method="get" action="<?php echo mac_url('vod/search'); ?>" onSubmit="return qrsearch();" autocomplete="off">
						<input type="text" id="wd" name="wd" class="mac_wd form-control" value="<?php echo $param['wd']; ?>" placeholder="请输入关键词..."/>
						<button class="submit" id="searchbutton" type="submit" name="submit"><i class="icon iconfont icon-search"></i></button>							
					</form>
				</div>
				<ul class="stui-header__user">
					<li class="hidden-xs">
						<a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon iconfont icon-comments"></i> 求片留言</a>
					</li>
					<?php if($maccms['user_status'] == 1): ?>
					<li>
						<a class="mac_user" href="javascript:;"><i class="icon iconfont icon-account"></i> <span class="hidden-xs">会员中心</span></a>
					</li>					
					<?php else: ?>
                    <li>
						<a href="javascript:;"><i class="icon iconfont icon-clock"></i>  <span class="hidden-xs">播放记录</span></a>
						<div class="dropdown history">					
							<h5 class="margin-0 text-muted">
								<a class="historyclean text-muted pull-right" href="">清空</a>
								播放记录
							</h5>
							<ul class="clearfix" id="stui_history"></ul>
						</div>
					</li>
					<?php endif; ?>		
				</ul>
			</div>
		</div>
	</div>
	<div class="stui-header__menu clearfix">
		<div class="container">
	        <div class="row">
				<span class="more hidden-xs">今日更新“<?php echo mac_data_count(0,'today','vod'); ?>”部影片</span>	  			  	
				<ul class="type-slide clearfix">	  		
					<li <?php if($maccms['aid'] == 1): ?>class="active"<?php endif; ?>><a href="<?php echo $maccms['path']; ?>">首页</a></li>
					<?php $__TAG__ = '{"num":"6","order":"asc","by":"sort","ids":"parent","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
			        <li <?php if(($vo['type_id'] == MAC_TYPE_ID || $vo['type_id'] == MAC_TYPE_PID)): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
			        <?php endforeach; endif; else: echo "" ;endif; ?>
			        <li <?php if($maccms['aid'] == 30): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_topic_index(); ?>">专题</a></li>
			        <li <?php if($maccms['aid'] == 31): ?>class="active"<?php endif; ?>><a href="<?php echo mac_url_actor_index(); ?>">明星</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>

<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
		if(!stui.browser.useragent.mobile){
			$(".MacPlayer").toggle();
		}
	});
</script>

    <div class="container">
        <div class="row">
        	<div class="col-lg-wide-8 col-xs-1 padding-0">
	            <div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<!-- 筛选 -->		
						<div class="stui-pannel_hd">
							<?php if($obj['childids']||$obj['parent']['childids']): ?>
							<ul class="stui-screen__list type-slide bottom-line-dot clearfix">
								<li>
									<span class="text-muted">按类型</span>
								</li>
								<?php if($obj['childids']||$obj['parent']['childids']): ?>
									<li<?php if($vo['parent']['type_id']==$obj['parent']['type_id']): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj['parent'],['area'=>$param['area'],'year'=>$param['year'],'class'=>$param['class'],'by'=>$param['by']],'show'); ?>">全部</a></li>
								    
								    <?php $__TAG__ = '{"ids":"current","order":"asc","by":"sort","flag":"vod","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		                        	<li<?php if($vo['type_id']==$obj['type_id']): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($vo,['area'=>$param['area'],'year'=>$param['year'],'class'=>$param['class'],'by'=>$param['by']],'show'); ?>" class="text-muted"><?php echo mac_filter_html($vo['type_name']); ?></a></li>
		                        	<?php endforeach; endif; else: echo "" ;endif; else: ?>
		                        	<li<?php if($obj['type_id'] == ''): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj['type_id'],['id'=>$obj['type_id']],'show'); ?>">全部</a></li>
		                        	<?php $__TAG__ = '{"parent":"'.$obj['type_pid'].'","order":"asc","by":"sort","id":"vo2","key":"key2"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key2 = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($key2 % 2 );++$key2;?>
		                        	<li<?php if($obj['type_id'] == $vo2['type_id']): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($vo2,[],'show'); ?>" class="text-muted"><?php echo $vo2['type_name']; ?></a></li>
		                        	<?php endforeach; endif; else: echo "" ;endif; endif; ?>												  	
							</ul>
							<?php endif; ?>
							<!-- <ul class="stui-screen__list type-slide bottom-line-dot clearfix">
								<li>
									<span class="text-muted">按剧情</span>
								</li>
								<li <?php if($param['class'] == ''): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>'','order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
				                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5f6ff30666ab7=explode(',',$obj['parent']['type_extend']['class']); if(is_array($_5f6ff30666ab7) || $_5f6ff30666ab7 instanceof \think\Collection || $_5f6ff30666ab7 instanceof \think\Paginator): if( count($_5f6ff30666ab7)==0 ) : echo "" ;else: foreach($_5f6ff30666ab7 as $key2=>$vo2): ?>
				                <li <?php if($param['class'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                <?php endforeach; endif; else: echo "" ;endif; else: $_5f6ff30666a49=explode(',',$obj['type_extend']['class']); if(is_array($_5f6ff30666a49) || $_5f6ff30666a49 instanceof \think\Collection || $_5f6ff30666a49 instanceof \think\Paginator): if( count($_5f6ff30666a49)==0 ) : echo "" ;else: foreach($_5f6ff30666a49 as $key2=>$vo2): ?>
				                <li <?php if($param['class'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$vo2,'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                <?php endforeach; endif; else: echo "" ;endif; endif; ?>							
							</ul> -->
							<ul class="stui-screen__list type-slide bottom-line-dot clearfix">
								<li>
									<span class="text-muted">按地区</span>
								</li>
								<li <?php if($param['area'] == ''): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>'','lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
				                <?php if(empty($obj['type_extend']['area']) || (($obj['type_extend']['area'] instanceof \think\Collection || $obj['type_extend']['area'] instanceof \think\Paginator ) && $obj['type_extend']['area']->isEmpty())): $_5f6ff3066697d=explode(',',$obj['parent']['type_extend']['area']); if(is_array($_5f6ff3066697d) || $_5f6ff3066697d instanceof \think\Collection || $_5f6ff3066697d instanceof \think\Paginator): if( count($_5f6ff3066697d)==0 ) : echo "" ;else: foreach($_5f6ff3066697d as $key2=>$vo2): ?>
				                    <li <?php if($param['area'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; else: $_5f6ff30666923=explode(',',$obj['type_extend']['area']); if(is_array($_5f6ff30666923) || $_5f6ff30666923 instanceof \think\Collection || $_5f6ff30666923 instanceof \think\Paginator): if( count($_5f6ff30666923)==0 ) : echo "" ;else: foreach($_5f6ff30666923 as $key2=>$vo2): ?>
				                    <li <?php if($param['area'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$vo2,'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
							</ul>
							<ul class="stui-screen__list type-slide bottom-line-dot clearfix">
								<li>
									<span class="text-muted">按年份</span>
								</li>
								<li <?php if($param['year'] == ''): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>'','level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
				                <?php if(empty($obj['type_extend']['year']) || (($obj['type_extend']['year'] instanceof \think\Collection || $obj['type_extend']['year'] instanceof \think\Paginator ) && $obj['type_extend']['year']->isEmpty())): $_5f6ff306668ad=explode(',',$obj['parent']['type_extend']['year']); if(is_array($_5f6ff306668ad) || $_5f6ff306668ad instanceof \think\Collection || $_5f6ff306668ad instanceof \think\Paginator): if( count($_5f6ff306668ad)==0 ) : echo "" ;else: foreach($_5f6ff306668ad as $key2=>$vo2): ?>
				                    <li <?php if($param['year'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; else: $_5f6ff30666852=explode(',',$obj['type_extend']['year']); if(is_array($_5f6ff30666852) || $_5f6ff30666852 instanceof \think\Collection || $_5f6ff30666852 instanceof \think\Paginator): if( count($_5f6ff30666852)==0 ) : echo "" ;else: foreach($_5f6ff30666852 as $key2=>$vo2): ?>
				                    <li <?php if($param['year'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$vo2,'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>							
							</ul>
							<ul class="stui-screen__list type-slide bottom-line-dot clearfix">
								<li>
									<span class="text-muted">按语言</span>
								</li>
								<li <?php if($param['lang'] == ''): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>'','year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
				                <?php if(empty($obj['type_extend']['lang']) || (($obj['type_extend']['lang'] instanceof \think\Collection || $obj['type_extend']['lang'] instanceof \think\Paginator ) && $obj['type_extend']['lang']->isEmpty())): $_5f6ff306667d1=explode(',',$obj['parent']['type_extend']['lang']); if(is_array($_5f6ff306667d1) || $_5f6ff306667d1 instanceof \think\Collection || $_5f6ff306667d1 instanceof \think\Paginator): if( count($_5f6ff306667d1)==0 ) : echo "" ;else: foreach($_5f6ff306667d1 as $key2=>$vo2): ?>
				                    <li <?php if($param['lang'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; else: $_5f6ff3066675c=explode(',',$obj['type_extend']['lang']); if(is_array($_5f6ff3066675c) || $_5f6ff3066675c instanceof \think\Collection || $_5f6ff3066675c instanceof \think\Paginator): if( count($_5f6ff3066675c)==0 ) : echo "" ;else: foreach($_5f6ff3066675c as $key2=>$vo2): ?>
				                    <li <?php if($param['lang'] == $vo2): ?> class="active" <?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$vo2,'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a></li>
				                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>							
							</ul>
							<ul class="stui-screen__list letter-list type-slide clearfix">
								<li>
									<span class="text-muted">按字母</span>
								</li>
								<li <?php if($param['letter'] == ''): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>'','state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>">全部</a></li>
				                <?php $_5f6ff306666d4=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,0-9'); if(is_array($_5f6ff306666d4) || $_5f6ff306666d4 instanceof \think\Collection || $_5f6ff306666d4 instanceof \think\Paginator): if( count($_5f6ff306666d4)==0 ) : echo "" ;else: foreach($_5f6ff306666d4 as $key2=>$vo2): ?>
				                <li <?php if($param['letter'] == $vo2): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$vo2,'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>$param['by'] ],'show'); ?>"><?php echo $vo2; ?></a><li>
				                <?php endforeach; endif; else: echo "" ;endif; ?>							
							</ul>			
						</div>
						<!-- end 筛选 -->		
						
						<!-- 排序 -->		
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<ul class="nav nav-head">
									<li <?php if($param['by'] == '' || $param['by'] == 'time'): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'time' ],'show'); ?>">按时间</a></li>
							        <li <?php if($param['by'] == 'hits'): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'hits' ],'show'); ?>">按人气</a></li>
							        <li <?php if($param['by'] == 'score'): ?> class="active"<?php endif; ?>><a href="<?php echo mac_url_type($obj,['area'=>$param['area'],'lang'=>$param['lang'],'year'=>$param['year'],'level'=>$param['level'],'letter'=>$param['letter'],'state'=>$param['state'],'tag'=>$param['tag'],'class'=>$param['class'],'order'=>$param['order'],'by'=>'score' ],'show'); ?>">按评分</a></li>
								</ul>																
							</div>	
						</div>
						<!-- end 排序 -->		
						
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist clearfix">
								<?php $__TAG__ = '{"num":"30","paging":"yes","pageurl":"vod\/show","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
								<li class="col-md-5 col-sm-4 col-xs-3">
									<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" data-original="<?php echo mac_url_img($vo['vod_pic']); ?>">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right"><?php if($vo['vod_remarks'] != ''): ?><?php echo $vo['vod_remarks']; elseif($vo['vod_serial'] > 0): ?>第<?php echo $vo['vod_serial']; ?>集<?php else: ?>已完结<?php endif; ?></span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>"><?php echo $vo['vod_name']; ?></a></h4>
		<p class="text text-overflow text-muted"><?php echo mac_default($vo['vod_actor'],'内详'); ?></p>
	</div>												
</div>	<!-- 列表-->															
								</li>
								 <?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>	
						</div>
						
					</div>				
				</div>		
				<?php if($__PAGING__['page_total'] > 1): ?>
<ul class="stui-page text-center clearfix">
	<li><a href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>">首页</a></li>
	<li><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>">上一页</a></li>							
	<?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
	<li class="hidden-xs <?php if($__PAGING__['page_current'] == $num): ?>active<?php endif; ?>"><a href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>"><?php echo $num; ?></a></li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	<li class="active visible-xs"><span class="num"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></span></li>
	<li><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>">下一页</a></li>
	<li><a href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>">尾页</a></li>							
</ul>
<?php endif; ?><!-- 翻页-->		
			</div>				
			<div class="col-lg-wide-2 col-xs-1 stui-pannel-side visible-lg">
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="col-pd clearfix">												
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					本周热门
				</h3>													
			</div>																		
		</div>
		<div class="stui-pannel_bd">																			
			<ul class="stui-vodlist__media active col-pd clearfix">
				<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"hits_week","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li <?php if($key > 1): ?>class="top-line-dot"<?php endif; ?>>
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" style="width: 33.5px; background-image: url(<?php echo mac_url_img($vo['vod_pic']); ?>);"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo mac_substring($vo['vod_name'],8); ?></a></p>	
		<div class="score">	
			<div class="star"><span class="star-cur" id="score"></span></div>
			<span class="branch"><?php echo $vo['vod_score']; ?></span>																
		</div>
	</div>																										
</li>	
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>										
		</div>	
	</div>	
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="col-pd clearfix">																
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					最新更新
				</h3>													
			</div>																		
		</div>
		<div class="stui-pannel_bd">																			
			<ul class="stui-vodlist__media active col-pd clearfix">
				<?php $__TAG__ = '{"num":"10","type":"current","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
					<li <?php if($key > 1): ?>class="top-line-dot"<?php endif; ?>>
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="<?php echo mac_url_vod_detail($vo); ?>" title="<?php echo $vo['vod_name']; ?>" style="width: 33.5px; background-image: url(<?php echo mac_url_img($vo['vod_pic']); ?>);"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="<?php echo mac_url_vod_detail($vo); ?>"><?php echo mac_substring($vo['vod_name'],8); ?></a></p>	
		<div class="score">	
			<div class="star"><span class="star-cur" id="score"></span></div>
			<span class="branch"><?php echo $vo['vod_score']; ?></span>																
		</div>
	</div>																										
</li>	
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>										
		</div>	
	</div>
</div>
<!-- 侧栏列表 -->	
			</div>
        </div>
    </div>
	<div class="myui-foot clearfix">
	<div class="container min">
		<div class="row">
			<div class="col-pd text-center">
				<p>本网站只提供web页面服务，并不提供资源存储，也不参与录制、上传，若本站收录的节目无意侵犯了贵司版权，请留言。</p>		
				<p class="hidden-xs">
				<a target="_blank" href="<?php echo mac_url('rss/rss'); ?>">RSS订阅</a><span class="split-line"></span>
				<a target="_blank" href="<?php echo mac_url('rss/baidu'); ?>">百度蜘蛛</a><span class="split-line"></span>
				<a target="_blank" href="<?php echo mac_url('rss/google'); ?>">谷歌地图</a><span class="split-line"></span>
				<a target="_blank" href="<?php echo mac_url('rss/sm'); ?>">神马地图</a><span class="split-line"></span>
				<a target="_blank" href="<?php echo mac_url('rss/so'); ?>">360地图</a><span class="split-line"></span>
				<a target="_blank" href="<?php echo mac_url('rss/sogou'); ?>">搜狗地图</a>
				</p>	
				<p class="margin-0">© 2020 <?php echo $maccms['site_name']; ?> <?php echo $maccms['site_icp']; ?><?php echo $maccms['site_tj']; ?></p>	
			</div>
		</div>
	</div>
</div>
<ul class="stui-extra clearfix">
	<li>
		<a class="backtop" href="javascript:scroll(0,0)" style="display: none;"><i class="icon iconfont icon-less"></i></a>
	</li>
	<li class="hidden-xs">
		<a class="copylink" href="javascript:;"><i class="icon iconfont icon-share"></i></a>
	</li>
	<li class="visible-xs">
		<a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a>
	</li>
	<li class="hidden-xs">
		<span><i class="icon iconfont icon-qrcode"></i></span>
		<div class="sideslip">
			<div class="col-pd">
				<p id="qrcode"></p>
				<p class="text-center font-12">扫码用手机访问</p>
			</div>			
		</div>
	</li>
	<li>
		<a href="<?php echo mac_url('gbook/index'); ?>"><i class="icon iconfont icon-comments"></i></a>
	</li>
</ul>
<div style="padding-bottom: 40px;" class="xs-block">
<div class="myui-nav__tabbar">
		<?php $__TAG__ = '{"num":"10","order":"asc","by":"sort","ids":"parent","id":"vo","key":"key"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a class="item" href="<?php echo mac_url_type($vo); ?>"><img class="icon-img" src="/statics/icon/icon_<?php echo $vo['type_id']; ?>.png"><p class="title"><?php echo $vo['type_name']; ?></p></a>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<a class="item" href="<?php echo mac_url_topic_index(); ?>">
		<img class="icon-img" src="/statics/icon/icon_5.png"><p class="title">专题</p>
		</a>
		<a class="item" href="<?php echo mac_url_actor_index(); ?>">
		<img class="icon-img" src="/statics/icon/icon_6.png"><p class="title">明星</p>
		</a>
	</div>
</div>
<div class="hide"></div>
<script type="text/javascript"> 
	$(".score").each(function(){
		var star = $(this).find(".branch").text().replace(".", "0.");
		$(this).find("#score").css("width",""+star+"%");
	});
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>
