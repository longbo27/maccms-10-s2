<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/extend/email/phpmailer.html";i:1596446456;}*/ ?>
<div class="layui-tab-item">

    <blockquote class="layui-elem-quote layui-quote-nm">
        提示信息：<br>
        发送邮件请开启sockets ,openssl扩展库，否则可能发送失败
    </blockquote>

    <div class="layui-form-item">
        <label class="layui-form-label">服务器：</label>
        <div class="layui-input-inline">
            <input type="text" id="host" name="email[phpmailer][host]" placeholder="" value="<?php echo $config['email']['phpmailer']['host']; ?>" class="layui-input w200"  >
        </div>
        <div class="layui-form-mid layui-word-aux">smtp服务器</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">端口：</label>
        <div class="layui-input-inline">
            <input type="text" id="port" name="email[phpmailer][port]" placeholder="" value="<?php echo $config['email']['phpmailer']['port']; ?>" class="layui-input w200"  >
        </div>
        <div class="layui-form-mid layui-word-aux">smtp端口</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">传输协议：</label>
        <div class="layui-input-inline w200">
            <select name="email[phpmailer][secure]" >
                <option value="" <?php if($config['email']['phpmailer']['secure'] == ''): ?>selected<?php endif; ?>>默认</option>
                <option value="tsl" <?php if($config['email']['phpmailer']['secure'] == 'tsl'): ?>selected<?php endif; ?>>TSL</option>
                <option value="ssl" <?php if($config['email']['phpmailer']['secure'] == 'ssl'): ?>selected<?php endif; ?>>SSL</option>
            </select>
        </div>
        <div class="layui-form-mid layui-word-aux">根据邮件服务器要求配置</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">帐号：</label>
        <div class="layui-input-inline">
            <input type="text" id="username" name="email[phpmailer][username]" placeholder="" value="<?php echo $config['email']['phpmailer']['username']; ?>" class="layui-input w200"  >
        </div>
        <div class="layui-form-mid layui-word-aux">smtp服务帐号</div>
    </div>
    <div class="layui-form-item">
        <label class="layui-form-label">密码：</label>
        <div class="layui-input-inline">
            <input type="password" id="password" name="email[phpmailer][password]" placeholder="" value="<?php echo $config['email']['phpmailer']['password']; ?>" class="layui-input w200"  >
        </div>
        <div class="layui-form-mid layui-word-aux">smtp服务密码</div>
    </div>

</div>