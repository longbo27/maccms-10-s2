<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"template/stui/html/gbook/report.html";i:1572532080;}*/ ?>
<!--报错弹窗开始-->
<div class="stui-modal fade" id="modal-seport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="stui-modal__dialog">
        <div class="stui-modal__content">
            <div class="stui-pannel clearfix">
				<div class="stui-pannel-box clearfix">
					<div class="stui-pannel_hd">
						<div class="stui-pannel__head active bottom-line clearfix">
							<a href="javascript:;" class="more close pull-right" data-dismiss="modal" aria-hidden="true"><i class="icon iconfont icon-close"></i></a>
							<h3 class="title">
								影片报错
							</h3>
						</div>																		
					</div>
					<div class="stui-pannel_bd clearfix">
						<ul class="input-list">				
							<form class="gbook_form">			
								<li>
									<textarea class="form-control gbook_content" name="gbook_content" rows="5"><?php echo $param['name']; ?></textarea>
								</li>									
								<?php if($gbook['verify'] == 1): ?>
								<li>
									<img class="pull-right" id="verify_img" src="<?php echo url('verify/index'); ?>" onClick="this.src=this.src+'?'"  alt="单击刷新" />
									<input type="text" class="form-control" id="verify" name="verify" placeholder="请输入验证码" style="width: 120px;">					
								</li>
								<?php endif; ?>					
								<li>
									<button type="button" id="gbook_submit" class="btn btn-lg btn-block btn-primary">提交报错</button>
								</li>
							</form>
						</ul>							
					</div>		
				</div>
			</div>		
        </div>
    </div>
</div>
<!--报错弹窗结束-->

