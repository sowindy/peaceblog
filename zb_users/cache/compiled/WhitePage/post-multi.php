<div class="post multi">
	<h4 class="post-date"><?php  echo $article->Time('Y年m月d日');  ?></h4>
	<h2 class="post-title"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h2>
	<div class="post-body"><?php  echo $article->Intro;  ?></div>
</div>