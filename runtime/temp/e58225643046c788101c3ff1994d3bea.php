<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:37:"template/stui/html/user/findpass.html";i:1572532098;s:67:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/block/include.html";i:1581922827;s:66:"/www/wwwroot/www.zhuiyuan.net/template/stui/html/user/include.html";i:1572532098;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>找回密码 - <?php echo $maccms['site_name']; ?> </title>
	<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>"/>
	<meta name="description" content="<?php echo $maccms['site_description']; ?>"/>
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
	<link href="<?php echo $maccms['path']; ?>statics/css/stui_user.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $maccms['path']; ?>statics/js/formValidator-4.0.1.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.imageupload.js"></script>

</head>
<body class="padding-0">
	
<div class="stui_login__form clearfix">
	<div class="stui-pannel stui-pannel-bg clearfix">
		<div class="stui-pannel-box clearfix">		
			<div class="stui-pannel_bd">
				<div class="head">
					<a href="<?php echo $maccms['path']; ?>"><img src="<?php echo mac_url_img(mac_default($maccms['site_logo'],'statics/img/logo.png')); ?>"/></a>
					<h4 class="margin-0">预留问题找回密码</h4>
				</div>
				<ul class="input-list">				
					<form method="post" id="fm" action="">					
						<li>
							<input type="text" id="user_name" name="user_name" class="form-control" placeholder="请输入您的登录账号">
						</li>
						<li>
							<input type="text" id="user_question" name="user_question" class="form-control" placeholder="请输入您密码找回问题">
						</li>
						<li>
							<input type="text" id="user_answer" name="user_answer" class="form-control" placeholder="请输入您的密码找回答案">
						</li>
						<li>
							<input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="请输入您的新密码">
						</li>
						<li>
							<input type="password" id="user_pwd2" name="user_pwd2" class="form-control" placeholder="请输入您的确认密码">
						</li>
						<li>
							<button type="button" id="btn_submit" class="btn btn-lg btn-block btn-primary">立即登录</button>
						</li>
						<li class="text-center">
							<a href="<?php echo url('user/login'); ?>">登录账号</a><span class="split-line"></span><a href="<?php echo url('user/findpass_msg'); ?>?ac=email">用邮箱找回</a><span class="split-line"></span><a href="<?php echo url('user/findpass_msg'); ?>?ac=phone">用手机找回</a>
						</li>
					</form>
				</ul>			
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(function(){
		$("body").bind('keyup',function(event) {
			if(event.keyCode==13){ $('#btn_submit').click(); }
		});
		$('#btn_submit').click(function() {
			if ($('#user_name').val()  == '') { alert('请输入用户！'); $("#user_name").focus(); return false; }
			if ($('#user_pwd').val()  == '') { alert('请输入密码！'); $("#user_pwd").focus(); return false; }
			if ($('#verify').val()  == '') { alert('请输入验证码！'); $("#verify").focus(); return false; }

			$.ajax({
				url: "<?php echo url('user/findpass'); ?>",
				type: "post",
				dataType: "json",
				data: $('#fm').serialize(),
				beforeSend: function () {
					$("#btn_submit").css("background","#fd6a6a").val("loading...");
				},
				success: function (r) {
					if(r.code==1){
						location.href="<?php echo url('user/index'); ?>";
					}
					else{
						alert(r.msg);
					}
				},
				complete: function () {
					$('#verify').click();
					$("#btn_submit").css("background","#fa4646").val("立即找回");
				}
			});

		});
	});

</script>

</body>
</html>