function checkfrom(form){
	var lfaceValue=parseInt(ckobj('faceValue').value);
	var f1=document.f1
    if(f1.channelId.value>3){
		var obj = document.getElementById("channelId");
        var channelname = obj.options[obj.selectedIndex].text;
		var cmgs="�����������"
		var mmgs="�����������"
		var lcardid=f1.cardId.value
		var lcardpass=f1.cardPass.value
		channeltype=f1.channelId.value
		switch (channeltype){
			case '4':
			  if(countEnglishCharacterLen(lcardid)!=9){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ9λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=12){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ12λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//��Ѷ��
			case '5':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ15λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)<8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ8-9λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//ʢ��
			case '6':
			  if(countEnglishCharacterLen(lcardid)!=16 && countEnglishCharacterLen(lcardid)!=18){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ16��18λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=16 && countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ16��18λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
			case '7':
			  if(countEnglishCharacterLen(lcardid)!=10){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ10λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=15){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ15λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
			case '8':
			  if(countEnglishCharacterLen(lcardid)!=20){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ20λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=12){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ12λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//�Ѻ�һ��ͨ
			case '9':
			  if(countEnglishCharacterLen(lcardid)!=16){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ16λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ8λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//��;��Ϸ��
			case '10':
			  if(countEnglishCharacterLen(lcardid)!=13){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ13λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=10){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ10λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
			case '11':
			  if(countEnglishCharacterLen(lcardid)!=13){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ13λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=9){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ9λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
			case '13':
			  if(countEnglishCharacterLen(lcardid)!=19){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ19λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ18λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//���ų�ֵ��
			case '14':
			  if(countEnglishCharacterLen(lcardid)!=17){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ17λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=18){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ18λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//�����г�ֵ��
			case '15':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ15λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=19){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ19λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//��ͨ��ֵ��
			case '16':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ15λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=15){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ15λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
			case '17':
			  if(countEnglishCharacterLen(lcardid)<10){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ10-12λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)<10){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ10-15λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//���һ��ͨ
			case '18':
			  if(countEnglishCharacterLen(lcardid)!=15){
			  f1.cardId.value=f1.cardId.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+cmgs + "\n\n" +"����Ϊ15λ");f1.cardId.focus();
			  return false;
			}
			else
			{
			if(countEnglishCharacterLen(lcardpass)!=8){
			  f1.cardPass.value=f1.cardPass.value.replace(/[^\w\/]/ig,'');
			  alert(channelname+mmgs + "\n\n" +"����Ϊ8λ");f1.cardPass.focus();
			  return false;
			}
			}
			break;//����һ��ͨ
		}
	  if(isNaN(lfaceValue) || lfaceValue<1 || lfaceValue>1000){
		//alert(lfaceValue);
		alert('��������ȷ�Ľ��.');
		f1.faceValue.value=f1.faceValue.value.replace(/\D+/g,'');
		f1.faceValue.focus();
		return false;
	    }
	}//������
	else
	{
		if(f1.channelId.value=1)
	    {   
	    //alert(lfaceValue);
		if(isNaN(lfaceValue) || lfaceValue<1 || lfaceValue>5000){
		alert('��������ȷ�Ľ��.');
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
//�������Ӣ���뺺�ֵ��ַ�������
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

//�����ַ����к��ֳ���
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
//�����ַ�����Ӣ���ַ�����
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