<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/urlsend/index.html";i:1593832000;s:69:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/public/head.html";i:1552220304;s:69:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/public/foot.html";i:1552223570;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - 请勿泄露后台地址 - Copyright by 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1024">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1024">
    <script type="text/javascript" src="/static/js/jquery.js?v=1024"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1024"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>

<div class="page-container p10">

    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab" lay-filter="tb1">
            <ul class="layui-tab-title">
                <?php if(is_array($extends['ext_list']) || $extends['ext_list'] instanceof \think\Collection || $extends['ext_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $extends['ext_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li data-key="<?php echo $key; ?>" lay-id="configpay_<?php echo $i+2; ?>"><?php echo $vo; ?>配置</li>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <div class="layui-tab-content">

                <?php echo $extends['ext_html']; ?>

            </div>
        </div>
        <div class="layui-form-item ">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>


    <form class="layui-form layui-form-pane" method="post" action="" target="_blank" id="form_post">
        <blockquote class="layui-elem-quote">
            断点会记录在缓存中，更新缓存后断点将消失。
            当前站点配置域名：<?php echo $GLOBALS['http_type'].$GLOBALS['config']['site']['site_url']; ?><br>
            开始推送之前请先填写好上面的所需配置项。
        </blockquote>

        <div class="layui-form-item">
            <label class="layui-form-label">推送类型：</label>
            <div class="layui-input-inline">
                <select class="w150" id="ac" name="ac" lay-filter="ac">
                    <?php if(is_array($extends['ext_list']) || $extends['ext_list'] instanceof \think\Collection || $extends['ext_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $extends['ext_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $key; ?>"><?php echo $vo; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">每页推送数：</label>
            <div class="layui-input-inline w400">
                <input type="text" name="limit" id="limit" value="50" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux"></div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">起始页码：</label>
            <div class="layui-input-inline w400">
                <input type="text" name="page" id="page" value="1" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux"></div>
        </div>

        <hr class="layui-bg-gray">
        <input type="button" value="当天视频" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=1');">
        <input type="button" value="全部视频" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=1');">

        <input type="button" value="当天文章" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=2');">
        <input type="button" value="全部文章" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=2');">
        <hr class="layui-bg-gray">
        <input type="button" value="当天专题" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=3');">
        <input type="button" value="全部专题" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=3');">

        <input type="button" value="当天演员" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=8');">
        <input type="button" value="全部演员" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=8');">
        <hr class="layui-bg-gray">
        <input type="button" value="当天角色" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=9');">
        <input type="button" value="全部角色" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=9');">

        <input type="button" value="当天网址" class="layui-btn layui-btn-primary" onclick="post('ac2=today&mid=11');">
        <input type="button" value="全部网址" class="layui-btn layui-btn-primary" onclick="post('ac2=all&mid=11');">
        <hr class="layui-bg-gray">
        <?php if($urlsend_break_baidu_push != ''): ?>
        <a href="<?php echo $urlsend_break_baidu_push; ?>" class="layui-btn layui-btn-danger ">【进入断点继续推送】</a>
        <?php endif; ?>

    </form>

</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript" src="/static/js/jquery.cookie.js"></script>
<script type="text/javascript">
    var curUrl = "<?php echo url('push'); ?>";
    layui.use(['element', 'form', 'layer'], function() {
        var element = layui.element
            ,form = layui.form
            , layer = layui.layer;


        element.on('tab(tb1)', function(){
            $.cookie('urlsend_tab', this.getAttribute('lay-id'));
        });

        if( $.cookie('urlsend_tab') !=null ) {
            element.tabChange('tb1', $.cookie('urlsend_tab'));
        }



    });
    function post(p)
    {
        var limit = $('#limit').val();
        var page = $('#page').val();
        var ac = $('#ac').val();

        $("#form_post").attr("action", curUrl + "?"+ 'ac=' +ac +'&limit='+limit +'&page='+page +'&' + p);
        $("#form_post").submit();
    }

    $(function () {
        if( $.cookie('urlsend_tab') == undefined) {
            $('.layui-tab-title').find('li').first().addClass('layui-this');
            $('.layui-tab-item').first().addClass('layui-show');
        }
    });

</script>
</body>
</html>
