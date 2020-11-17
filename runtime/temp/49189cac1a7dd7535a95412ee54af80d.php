<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"template/stui/html/comment/ajax.html";i:1571647172;}*/ ?>
	<style type="text/css">.stui-comment__form{position:relative;margin-bottom:20px}.stui-comment__form .comment_content{margin-bottom:20px}.stui-comment__form .submit-box{float:right}.stui-comment__item{position:relative;padding:15px 0 15px 60px}.stui-comment__item.active{margin-top:10px;padding:15px 0 0 60px}.stui-comment__item .avatar{position:absolute;top:15px;left:0}.stui-comment__item .avatar img{width:50px;height:50px;border-radius:50%}.stui-comment__item .comment-head .title{margin:0}.stui-comment__item .comment-cont{margin-bottom:10px;line-height:25px}.stui-comment__item .comment-foot a{display:inline-block;font-size:12px}.stui-comment__item .stui-comment__form{margin-top:10px;margin-bottom:0}@media (max-width:767px){.stui-comment__form .submit-box{float:none}.stui-comment__item{position:relative;padding:10px 0 10px 40px}.stui-comment__item.active{margin-top:5px;padding:15px 0 0 40px}.stui-comment__item .avatar{top:10px}.stui-comment__item .avatar img{width:30px;height:30px}}</style>	
    <!--评论开始-->
    <div class="col-pd">
	    <form class="comment_form clearfix">
	        <input type="hidden" name="comment_pid" value="0">
	        <!--评论框-->
	        <div class="stui-comment__form clearfix">       	
	            <textarea class="comment_content form-control" name="comment_content" rows="3" placeholder="请输入评论内容..."></textarea>
	            <div class="submit-box">
	                <?php if($comment['verify'] == 1): ?>
	                <img id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" height="30" />	                
	                &nbsp;&nbsp;<input class="form-control" type="text" id="verify" name="verify" placeholder="验证码" style="display: inline-block; width: 80px;"/>
	                <?php endif; ?>
	                &nbsp;&nbsp;<input class="comment_submit btn btn-primary pull-right" type="button" value="发布">
	            </div>
	        </div>
	    </form>
	    <?php $__TAG__ = '{"num":"10","paging":"yes","order":"desc","by":"id","id":"vo","key":"key"}';$__LIST__ = model("Comment")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;endforeach; endif; else: echo "" ;endif; ?>
    	<div class="stui-pannel__head active clearfix">
    		<span class="more pull-right">共“<span class="text-red" id="item_count"><?php echo intval($__PAGING__['record_total']); ?></span>”条评论</span>
			<h3 class="title">
				用户评论
			</h3>						
		</div>	
        <?php if(is_array($__LIST__) || $__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator): if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ?>
        <div class="stui-comment__item top-line clearfix">
        	<a class="avatar" href="javascript:;"><img class="face" src="/static/images/home/duface.png"></a>              
            <div class="comment-head clearfix">
            	<span class="text-muted pull-right hidden-xs"><?php echo long2ip($vo['comment_ip']); ?></span>
            	<h4 class="title"><?php echo $vo['comment_name']; ?></h4>
                <p class="font-12 text-muted"><?php echo date('Y-m-d H:i:s',$vo['comment_time']); ?></p>                      
            </div>
            <div class="comment-cont clearfix"><?php echo mac_em_replace($vo['comment_content']); ?></div>
            <div class="comment-foot clearfix">
            	<a class="comment_report pull-right text-muted" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">举报</a>
                <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
                    <i class="icon iconfont icon-good"></i>
                    <span class="digg_num text-red"><?php echo $vo['comment_up']; ?></span>
                </a>
                <span class="split-line"></span>
                <a class="digg_link" data-id="<?php echo $vo['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
                    <i class="icon iconfont icon-bad"></i>
                    <span class="digg_num text-red"><?php echo $vo['comment_down']; ?></span>
                </a>
                <span class="split-line"></span>
                <a class="comment_reply text-muted" data-id="<?php echo $vo['comment_id']; ?>" href="javascript:;">回复 <i class="icon iconfont icon-moreunfold"></i></a>              
            </div>
            <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): if( count($vo['sub'])==0 ) : echo "" ;else: foreach($vo['sub'] as $key=>$child): ?>
            <div class="stui-comment__item active top-line clearfix">
               	<a class="avatar" href="javascript:;"><img class="face" src="/static/images/home/duface.png"></a>
                <div class="comment-head clearfix">
                	<span class="text-muted pull-right"><?php echo long2ip($child['comment_ip']); ?></span>
                	<h4 class="title"><?php echo $child['comment_name']; ?></h4>
                	<p class="font-12 text-muted"><?php echo date('Y-m-d H:i:s',$child['comment_time']); ?></p>    
                </div>
                <div class="comment-cont clearfix"><?php echo mac_em_replace($child['comment_content']); ?></div>
                <div class="comment-foot clearfix">
                	<a class="comment_report pull-right text-muted" data-id="<?php echo $child['comment_id']; ?>" href="javascript:;">举报</a>
                    <a class="digg_link" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="up" href="javascript:;">
                         <i class="icon iconfont icon-good"></i>
                        <span class="digg_num text-red"><?php echo $child['comment_up']; ?></span>
                    </a>
                    <span class="split-line"></span>
                    <a class="digg_link" data-id="<?php echo $child['comment_id']; ?>" data-mid="4" data-type="down" href="javascript:;">
                        <i class="icon iconfont icon-bad"></i>
                        <span class="digg_num text-red"><?php echo $child['comment_down']; ?></span>
                    </a>                   
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <!--评论结束-->
    
    <?php if($__PAGING__['page_total'] > 1): ?>
	<ul class="stui-page text-center clearfix">
		<li><a href="javascript:void(0);" onclick="MAC.Comment.Show(1)">首页</a></li>
		<li><a href="javascript:void(0);" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_prev']; ?>')">上一页</a></li>							
		<?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): ?>
		<li class="hidden-xs <?php if($__PAGING__['page_current'] == $num): ?>active<?php endif; ?>"><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $num; ?>')"><?php echo $num; ?></a></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<li class="active visible-xs"><span class="num"><?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?></span></li>
		<li><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_next']; ?>')">下一页</a></li>
		<li><a href="javascript:void(0)" onclick="MAC.Comment.Show('<?php echo $__PAGING__['page_total']; ?>')">尾页</a></li>							
	</ul>
	<?php endif; ?>
	