<?php print $platon__header; ?>


<?php if(!user_is_logged_in()):?>
<div class="">
	<?php print $messages?>
	<?php print render($page['content'])?>
</div>
<?else:?>
<div class="page-container">
<?php print $platon__site_content; ?>
</div>
<?php endif?>


<?php print $platon__footer; ?>
		