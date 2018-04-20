<?php 

	$sql="select * from {$this->prename}links where lid=?";
	$linkData=$this->getRow($sql, $args[0]);
	
	if($linkData['uid']){
		$parentData=$this->getRow("select fanDian, fanDianBdw, username from {$this->prename}members where uid=?", $linkData['uid']);
	}else{
		$this->getSystemSettings();
		$parentData['fanDian']=$this->settings['fanDianMax'];
		$parentData['fanDianBdw']=$this->settings['fanDianBdwMax'];
	}
?>
<style type="text/css">
.modal-body {height:230px; font-size:14px;}
.modal-body ul{ position:absolute;width:800px;}
.modal-body li{margin:20px 30px 10px 30px;}
</style>
  <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">注册链接返点信息</h4>
   </div>
   <div class="modal-body" >
    <ul>
	  <li><em>上级会员：</em>
	 <td><input type="text" name="username" readonly="readonly" value="<?=$parentData['username']?>"/></td>
	 
	   <li><em>会员返点：</em>
	   <input type="text" name="fanDian" readonly="readonly" value="<?=$linkData['fanDian']?>" max="<?=$parentData['fanDian']?>" min="0" fanDianDiff=<?=$this->settings['fanDianDiff']?> ><span style="color:#999"><?=$parentData['fanDian']?>%</span></li>
	   
	   <li><em>不定返点：</em>
		<input type="text" name="fanDianBdw" value="<?=$linkData['fanDianBdw']?>" max="<?=$parentData['fanDianBdw']?>" min="0"/><span style="color:#999"><?=$parentData['fanDianBdw']?>%</span></li>
		
		 <li><em>注册推广链接：</em>
		 <input style="width: 350px;" class="t-c t-c-w1" id="adv-url" readonly="readonly" value="http://<?=$_SERVER['HTTP_HOST']?><?=$this->basePath('User-r', $linkData['code']) ?>" />
	  	</ul>
	</div>
   <div class="modal-footer">
     <button type="button" class="btn btn-action" data-dismiss="modal">关闭</button>
   </div>  