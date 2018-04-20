<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<div class="pp" action="tzSscInput" length="4" random="sscRandom">
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
<li>1234,5678</li>
<li>1234;5678</li>
<li>1234 5678</li>
<li>1234<br/>5678</li>
</div>
</div>
<?php $maxPl=$this->getPl($this->type, $this->played); ?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($maxPl)?>);
})
</script>
