<div class="post single">
	<h4 class="post-date"><?php  echo $article->Time('Y年m月d日');  ?></h4>
	<h2 class="post-title"><?php  echo $article->Title;  ?></h2>
	<div class="post-body"><?php  echo $article->Content;  ?></div>
	<?php if (Count($article->Tags)>0) { ?><h5 class="post-tags">标签：<?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a>&nbsp;<?php }   ?></h5><?php } ?>
</div>

<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>