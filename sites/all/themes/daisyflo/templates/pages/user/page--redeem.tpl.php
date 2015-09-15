<?php print $platon__header; ?>
<?php if(!user_is_logged_in()):?>
<div class="container">
	<div class="col-md-offset-4 col-md-5">
	<?php print $messages?>
	</div>
	<?php print render($page['content'])?>
</div>
<?else:?>
<div class="page-container">
<?php print $platon__site_content; ?>
</div>
<?php endif?>
<?php print $platon__footer; ?>
		