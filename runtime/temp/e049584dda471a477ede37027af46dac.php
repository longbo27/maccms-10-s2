<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"template/stui/html/rss/google.html";i:1537772594;}*/ ?>
<?php echo '<?'; ?>
xml version="1.0" encoding="UTF-8" ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc><?php echo $maccms['site_url']; ?></loc>
<lastmod><?php echo $maccms['date']; ?></lastmod>
<changefreq>hourly</changefreq>
<priority>1.0</priority>
</url>
<?php $__TAG__ = '{"num":"30","paging":"yes","order":"desc","by":"time","id":"vo","key":"key"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
<url>
<loc>https://<?php echo $maccms['site_url']; ?><?php echo mac_url_vod_detail($vo); ?></loc>
<lastmod><?php echo date('Y-m-d H:i:s',$vo['vod_time']); ?></lastmod>
<changefreq>daily</changefreq>
<priority>0.8</priority>
</url>
<?php endforeach; endif; else: echo "" ;endif; ?>
</urlset>