<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/www/wwwroot/www.zhuiyuan.net/application/admin/view/extend/upload/uomg.html";i:1552203220;}*/ ?>
<div class="layui-form-item upload_mode mode_Uomg" <?php if($config['upload']['mode'] != 'Uomg'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">优启梦图床：</label>
<div class="layui-input-block">
    <a href="http://api.uomg.com/" target="_blank" class="layui-btn layui-btn-primary">目前免费不用申请 http://api.uomg.com/</a>
</div>
</div>
<div class="layui-form-item upload_mode mode_Uomg" <?php if($config['upload']['mode'] != 'Uomg'): ?>style="display:none;" <?php endif; ?>>
<label class="layui-form-label">OPENID：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][uomg][openid]" placeholder="" value="<?php echo $config['upload']['api']['uomg']['openid']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">操作员名：</label>
<div class="layui-input-inline w200">
    <input type="text" name="upload[api][uomg][key]" placeholder="" value="<?php echo $config['upload']['api']['uomg']['key']; ?>" class="layui-input"  >
</div>
<label class="layui-form-label">类型：</label>
<div class="layui-input-inline w200">
    <select class="w150" name="upload[api][uomg][type]">
        <option value="ali" <?php if($config['upload'][api][uomg][type] == 'ali'): ?>selected <?php endif; ?>>阿里巴巴</option>
        <option value="baidu" <?php if($config['upload'][api][uomg][type] == 'baidu'): ?>selected <?php endif; ?>>百度识图</option>
        <option value="sina" <?php if($config['upload'][api][uomg][type] == 'sina'): ?>selected <?php endif; ?>>新浪微博</option>
        <option value="sogou" <?php if($config['upload'][api][uomg][type] == 'sogou'): ?>selected <?php endif; ?>>搜狗图片</option>
        <option value="juejin" <?php if($config['upload'][api][uomg][type] == 'juejin'): ?>selected <?php endif; ?>>掘金社区</option>
        <option value="360" <?php if($config['upload'][api][uomg][type] == '360'): ?>selected <?php endif; ?>>奇虎360</option>
        <option value="jd" <?php if($config['upload'][api][uomg][type] == 'jd'): ?>selected <?php endif; ?>>京东商城</option>
    </select>
</div>
</div>