<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/domain/index.html";i:1562551814;s:69:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/public/head.html";i:1552220304;s:69:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/public/foot.html";i:1552223570;}*/ ?>
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
    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>
    
    <form class="layui-form layui-form-pane" method="post" action="">
        <input type="hidden" name="vod_id" value="<?php echo $info['vod_id']; ?>">

        <div class="layui-tab">
            <ul class="layui-tab-title ">
                <li class="layui-this">站群配置</a></li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1，此功能支持非静态模式下同1个数据库不同域名显示不同的模板和网站配置信息<br>
                        2，不限制域名网站数量<br>
                        3，导入文本格式是：域名$网站名称$关键字$描述$模板$模板目录$广告目录。每行一个网站。清空原有数据。<br>
                        <a class="layui-btn layui-btn-primary" href="<?php echo url('export'); ?>" title="导出">导出</a>
                        <a class="layui-btn layui-btn-primary layui-upload" data-href="<?php echo url('import'); ?>" >导入</a>
                    </blockquote>

                    <script>
                        var arr_len = <?php echo count($domain_list); ?>;
                    </script>
                    <?php 
                    $n=0;
                     ?>

                    <div id="domain_list" class="contents">
                        <?php if(is_array($domain_list) || $domain_list instanceof \think\Collection || $domain_list instanceof \think\Paginator): $i = 0; $__LIST__ = $domain_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
                        $n++;
                         ?>
                        <div class="layui-form-item tr" data-i="<?php echo $key; ?>">
                        <label class="layui-form-label">网站<?php echo $n; ?>：</label>
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_url][]" class="layui-input" placeholder="域名" value="<?php echo $vo['site_url']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_name][]" class="layui-input" placeholder="网站名称" value="<?php echo $vo['site_name']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_keywords][]" class="layui-input" placeholder="关键字" value="<?php echo $vo['site_keywords']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><input type="text" name="domain[site_description][]" class="layui-input" placeholder="描述" value="<?php echo $vo['site_description']; ?>"></div>&nbsp;
                            <div class="layui-input-inline w150"><select name="domain[template_dir][]"><option value="no">请选择模板.</option><?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo2; ?>" <?php if($vo2 == $vo['template_dir']): ?>selected<?php endif; ?>><?php echo $vo2; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div>
                            <div class="layui-input-inline w150"><input type="text" name="domain[html_dir][]" class="layui-input" placeholder="模板目录" value="<?php echo $vo['html_dir']; ?>"></div>
                            <div class="layui-input-inline w150"><input type="text" name="domain[ads_dir][]" class="layui-input" placeholder="广告目录" value="<?php echo $vo['ads_dir']; ?>"></div>
                            <div> <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['site_url']); ?>" href="javascript:;" title="删除">删除</a></div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="layui-form-item">
                        <label class=""><button class="layui-btn radius j-player-add" type="button">添加一组</button></label>
                        <div class="layui-input-block">

                        </div>
                    </div>


        </div>

            </div>
        </div>

                <div class="layui-form-item center">
                    <div class="layui-input-block">

                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    var template_select='<?php if(is_array($templates) || $templates instanceof \think\Collection || $templates instanceof \think\Paginator): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo; ?>"><?php echo $vo; ?></option><?php endforeach; endif; else: echo "" ;endif; ?>';

    layui.use(['form','layer','upload'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery
            , upload = layui.upload;


        upload.render({
            elem: '.layui-upload'
            ,url: "<?php echo url('domain/import'); ?>"
            ,method: 'post'
            ,exts:'txt'
            ,before: function(input) {
                layer.msg('文件上传中...', {time:3000000});
            },done: function(res, index, upload) {
                var obj = this.item;
                if (res.code == 0) {
                    layer.msg(res.msg);
                    return false;
                }
                location.reload();
            }
        });

        $('.j-player-add').on('click',function(){
            arr_len++;
            var tpl='<div class="layui-form-item" ><label class="layui-form-label">网站：'+arr_len+'</label><div class="layui-input-inline w150"><input type="text" name="domain[site_url][]" class="layui-input" placeholder="域名" ></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_name][]" class="layui-input" placeholder="网站名称"></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_keywords][]" class="layui-input" placeholder="关键字" ></div>&nbsp;<div class="layui-input-inline w150"><input type="text" name="domain[site_description][]" class="layui-input" placeholder="描述" ></div>&nbsp;<div class="layui-input-inline w150"><select name="domain[template_dir][]"><option value="no">请选择模板.</option>'+template_select+'</select></div><div class="layui-input-inline w150"><input type="text" name="domain[html_dir][]" class="layui-input" placeholder="模板目录" ></div><div class="layui-input-inline w150"><input type="text" name="domain[ads_dir][]" class="layui-input" placeholder="广告目录" ></div><div><a href="javascript:void(0)" class="j-editor-remove">删除</a>&nbsp;</div></div>';
            $("#domain_list").append(tpl);

            form.render('select');
        });

        if(arr_len==0) {
            $('.j-player-add').click();
        }
    });
    
</script>

</body>
</html>