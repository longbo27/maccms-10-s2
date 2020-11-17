<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:34:"template/stui/html/actor/show.html";i:1582111661;s:67:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/include.html";i:1581922827;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/head.html";i:1585442082;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/page.html";i:1539164314;s:64:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/foot.html";i:1585442114;}*/ ?>
<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>明星库-<?php echo $maccms['site_name']; ?></title>

<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>" />

<meta name="description" content="<?php echo $maccms['site_description']; ?>" />

  



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
<!-- 筛选 -->
        <div class="myui-panel myui-panel-bg clearfix">

			<div class="myui-panel-box clearfix">

				<div class="myui-panel_bd">

					<ul class="myui-vodlist clearfix">

					   <?php $__TAG__ = '{"num":"60","paging":"yes","pageurl":"actor\/show","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Actor")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>	
												<li class="col-lg-6 col-md-6 col-sm-4 col-xs-3">
							<div class="myui-vodlist__box">

			<a class="myui-vodlist__thumb actor lazyload" href="<?php echo mac_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>" data-original="<?php echo mac_url_img($vo['actor_pic']); ?>"><span class="pic-text text-right">

		演员</span>

	</a>									

	<div class="myui-vodlist__detail">

		<h4 class="title text-overflow text-center"><a href="<?php echo mac_url_actor_detail($vo); ?>" title="<?php echo $vo['actor_name']; ?>"><?php echo $vo['actor_name']; ?></a></h4>

	</div>										

</div><!-- 列表-->															

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
<?php endif; ?>

<!-- 翻页-->		



        	

	        

	        	

	        	

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

