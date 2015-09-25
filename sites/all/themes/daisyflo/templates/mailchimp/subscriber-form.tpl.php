<?php $form['submit']['#value'] = "Subscribe";?>

<div id="subscribe-container" class="row">


	<div id="title-header" class="no-margin">
		<h1><strong>Subscribe to our News Letter</strong></h1>
	</div>
	
	<div class="col-md-12">
		<p>Reference site about <span class="text-primary">Lorem Ipsum</span>,
		giving information on its origins, as well as a random Lipsum generator.
		giving information on its origins, as
		well <span class="text-primary">Lorem Ipsum</span>,  as a random Lipsum generator.
		</p>
	
		<div class="col-md-6 no-padding-left">
			<?php echo render($form["mergevars"]);?>
		</div>
		<div class="col-md-6">
			<?php echo render($form["submit"]);?>
		</div>
	
		<?php print drupal_render_children($form);?>
	</div>

</div>