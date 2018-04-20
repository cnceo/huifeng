function checkfrom(form){
	var lfaceValue=parseInt(ckobj('faceValue').value);
	var f1=document.f1
    if(f1.channelId.value>3){
		var obj = document.getElementById("channelId");
        var channelname = obj.options[obj.selectedIndex].text;
		var cmgs="卡号输入错误！"
		var mmgs="密码输入错误！"
		var lcardid=f1.cardId.value
		var lcardpass=f1.cardPass.value
		channeltype=f1.channelId.value
		switch (channeltype){
			case '4':
			  if(countEnglishCharacterLen(lcardid)!=9){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为9位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=12){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为12位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//腾讯卡
			case '5':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为15位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)<8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为8-9位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//盛大卡
			case '6':
			  if(countEnglishCharacterLen(lcardid)!=16 && countEnglishCharacterLen(lcardid)!=18){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为16或18位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=16 && countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为16或18位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//骏网一卡通
			case '7':
			  if(countEnglishCharacterLen(lcardid)!=10){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为10位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=15){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为15位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//完美一卡通
			case '8':
			  if(countEnglishCharacterLen(lcardid)!=20){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为20位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=12){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为12位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//搜狐一卡通
			case '9':
			  if(countEnglishCharacterLen(lcardid)!=16){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为16位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为8位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//征途游戏卡
			case '10':
			  if(countEnglishCharacterLen(lcardid)!=13){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为13位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=10){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为10位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//久游一卡通
			case '11':
			  if(countEnglishCharacterLen(lcardid)!=13){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为13位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=9){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为9位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//网易一卡通
			case '13':
			  if(countEnglishCharacterLen(lcardid)!=19){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为19位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为18位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//电信充值卡
			case '14':
			  if(countEnglishCharacterLen(lcardid)!=17){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为17位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为18位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//神州行充值卡
			case '15':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为15位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=19){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为19位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//联通充值卡
			case '16':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为15位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=15){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为15位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//纵游一卡通
			case '17':
			  if(countEnglishCharacterLen(lcardid)<10){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为10-12位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)<10){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为10-15位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//天宏一卡通
			case '18':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"卡号为15位");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"密码为8位");f1.cardPass.focus();
			  return false;
			}
			}
			break;//天下一卡通
		}
	  if(isNaN(lfaceValue) || lfaceValue<1 || lfaceValue>1000){
		//alert(lfaceValue);
		alert('请输入正确的金额.');
		f1.faceValue.value=f1.faceValue.value.replace(/\D+/g,'');
		f1.faceValue.focus();
		return false;
	    }
	}//非网银
	else
	{
		if(f1.channelId.value=1)
	    {   
	    //alert(lfaceValue);
		if(isNaN(lfaceValue) || lfaceValue<1 || lfaceValue>5000){
		alert('请输入正确的金额.');
		f1.faceValue.value=f1.faceValue.value.replace(/\D+/g,'');
		f1.faceValue.focus();
		return false;
	    }
	}
	   return true;
	}
}
function ckobj(el){
    return typeof el=="string" ? document.getElementById(el) : el;
}
//计算包含英文与汉字的字符串长度
function countCharacters(str){
    var totalCount = 0; 
    for (var i=0; i<str.length; i++) { 
        var c = str.charCodeAt(i); 
        if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) { 
             totalCount++; 
         }else {     
             totalCount+=2; 
         } 
     }
    // alert(totalCount);
    return totalCount;
}

//计算字符串中汉字长度
function countChineseCharacterLen(str){
var totalCount = 0; 
    for (var i=0; i<str.length; i++) { 
        var c = str.charCodeAt(i); 
        if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) {}
   else {     
             totalCount++; 
         } 
     }
    return totalCount;
}
//计算字符窜中英文字符长度
function countEnglishCharacterLen(str){
var totalCount = 0; 
    for (var i=0; i<str.length; i++) { 
        var c = str.charCodeAt(i); 
        if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) {
             totalCount++; 
         } 
     }
    return totalCount;
}