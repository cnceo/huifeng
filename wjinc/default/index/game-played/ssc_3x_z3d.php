<?php $z3Pl=$this->getPl($this->type, 19);$z6Pl=$this->getPl($this->type, 20); ?>
<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<div class="pp" action="tzSscHhzxInput" played="后" length="3" z3min="<?=$z3Pl['bonusPropBase']?>" z6min="<?=$z6Pl['bonusPropBase']?>" z3max="<?=$z3Pl['bonusProp']?>" z6max="<?=$z6Pl['bonusProp']?>">
<span>填写号码（ <span style="color:red">*</span> 单注号码分割支持逗号(,)、分号(;)、空格( )、回车）</span><br/>
	<textarea id="textarea-code"></textarea>
	<div class="texth1">
<ul>
<h6>提示</h6>
<li>请把您已有的大底号码复制或者输入到下边文本框中。</li>
<li>单注号码分割支持逗号（,）、分号（；）、空格（ ）回车（换行）</li>
</ul>
</div>
<div class="texth2">
<h6>提示</h6>
<ul>
<li>123,456</li>
<li>123;456</li>
<li>123 456</li>
<li>123<br/>456</li>
</div>
</div>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($z3Pl)?>, true);
})
</script>
