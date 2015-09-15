

<?php $form = drupal_get_form('enroll_form'); ?>
<?php print '<form id="'.$form['#id'].'" accept-charset="UTF-8" method="'.$form['#method'].'" action="'.$form['#action'].'">'; ?>

<div class="panel panel-default course-card edit-profile-container">
	<div class="panel-body">
		<div class="col-md-1">
		</div>
		<div class="col-md-6">
		<p>Do you have a DaisyFlo course Voucher Code? Please enter it below to automatically redeem a course!</p>
			<?php print render($form["voucher_code"]); ?>
			<?php print drupal_render_children($form); ?>
		</div>
		<div class="col-md-offset-1 col-md-3">
			<img src="/sites/all/themes/daisyflo/img/theme/paw2.png">
		</div>
	</div>
</div>


</form>

