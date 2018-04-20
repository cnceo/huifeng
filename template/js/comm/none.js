$(function(){
$('#d1').click(function(){
        if($('#d2').is(':hidden'))
        {
          $('#d2').slideDown('slow');  
          $(this).html('关闭详情');
        }else{
          $('#d2').slideUp('slow');
          $(this).html('查看详情');  
            }
});
});
$(function(){
$('#d3').click(function(){
        if($('#d4').is(':hidden'))
        {
          $('#d4').slideDown('slow');  
          $(this).html('关闭详情');
        }else{
          $('#d4').slideUp('slow');
          $(this).html('查看详情');  
            }
});
});
$(function(){
$('#d5').click(function(){
        if($('#d6').is(':hidden'))
        {
          $('#d6').slideDown('slow');  
          $(this).html('关闭详情');
        }else{
          $('#d6').slideUp('slow');
          $(this).html('查看详情');  
            }
});
});
$(function(){
$('#d7').click(function(){
        if($('#d8').is(':hidden'))
        {
          $('#d8').slideDown('slow');  
          $(this).html('关闭详情');
        }else{
          $('#d8').slideUp('slow');
          $(this).html('查看详情');  
            }
});
});
function out(){
  layer.confirm('您真的要退出游戏吗？', {
  title: '温馨提示',
  btn: ['确定','取消']
}, function(){
  window.location.href = "/index.php?tnt=uout";
});
}
function mobile(){
  layer.alert('手机投注网址：m.xxxx.com<br/><br/>推荐使用 UC浏览器 访问', {
    title: '温馨提示',
    skin: 'layui-layer-molv'
    ,closeBtn: 0
    ,shift: 1 
  });
}
function future(){
  layer.msg('即将推出，谢谢关注');
}
function bet(){
  layer.alert('追号系统正在维护中，给您带来不便之处请谅解，谢谢您的支持');
}