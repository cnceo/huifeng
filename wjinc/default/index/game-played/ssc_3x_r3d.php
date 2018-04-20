<input type="hidden" name="playedGroup" value="<?=$this->groupId?>" />
<input type="hidden" name="playedId" value="<?=$this->played?>" />
<input type="hidden" name="type" value="<?=$this->type?>" />
<div class="pp" action="tzSscWeiInput" length="3" random="sscRandom">
	<textarea id="textarea-code"></textarea>
		<div id="wei-shu" length="3">
		<label><input type="checkbox" value="16" />万&nbsp;</label>
		<label><input type="checkbox" value="8" />千&nbsp;</label>
		<label><input type="checkbox" value="4" />百&nbsp;</label>
		<label><input type="checkbox" value="2" />十&nbsp;</label>
		<label><input type="checkbox" value="1" />个&nbsp;</label>
	</div>
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
<?php $maxPl=$this->getPl($this->type, $this->played); ?>
<script type="text/javascript">
$(function(){
	gameSetPl(<?=json_encode($maxPl)?>);
})
</script>
