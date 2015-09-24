<?php 
$form["account"]["mail"]['#description'] = "";
$form['account']["mail"]['#attributes']['placeholder'] = t('Email');
$form['account']['mail']['#title_display'] = 'invisible';

$form['account']["pass"]["pass1"]['#description'] = "";
$form['account']["pass"]["pass1"]['#attributes']['placeholder'] = t('Password');
$form['account']["pass"]["pass1"]['#title_display'] = 'invisible';

$form['account']["pass"]["pass2"]['#description'] = "";
$form['account']["pass"]["pass2"]['#attributes']['placeholder'] = t('Confirm Password');
$form['account']["pass"]["pass2"]['#title_display'] = 'invisible';

$form['field_first_name']['#label_display'] = "hidden";
$form['field_first_name']['#attributes']['placeholder'] = array("first name");
$form['field_first_name']['#title_display'] = 'invisible';
$form['field_first_name']['#title'] = '';

$form['actions']["submit"]['#suffix']   = "";
$form['actions']["submit"]['#prefix']   = "";
$form['actions']["submit"]['#value']   = "SAVE ACCOUNT DETAILS";


?>

<div class="edit-profile-container">
	<h1 class="text-primary"><strong>Account Settings</strong></h1>
	<div class="col-md-12">
		<div class="col-md-9">
			<h3><strong>Personal Information</strong></h3>
			<div class="col-md-6">
				<?php echo render($form["field_first_name"]);?>
			</div>
			<div class="col-md-6">
				<?php echo render($form["field_last_name"]);?>
			</div>
			<div class="col-md-12">
				 <?php 	echo render($form["account"]["mail"]);?>
			</div>
			<div class="col-md-12">
				<hr>
			</div>
			<h3><strong>Password</strong></h3>
			<div class="col-md-12 hidden">
				<?php 	echo render($form["account"]["pass"]);?>
			</div>
			<div class="col-md-12">
				<?php 	echo render($form["account"]["current_pass"]);?>
			</div>
			<div class="col-md-12">
				<?php 	echo render($form["account"]["pass"]["pass1"]);?>
			</div>
			<div class="col-md-12">
				<?php 	echo render($form["account"]["pass"]["pass2"]);?>
			</div>
			<div class="col-md-12">
				<hr>
			</div>
			<h3><strong>Profile</strong></h3>
			<div class="col-md-6">
				<?php echo render($form["picture"]["picture"]);?>
				<?php echo render($form["picture"]["picture_upload"]);?>
			</div>
			<div class="col-md-6 text-center">
				<?php echo render($form["picture"]["picture_current"]);?>
				Preview
			</div>
		</div>
		
		
		<div class="hidden">
		<?php print drupal_render_children($form);?>
		</div>
									
		<div class="col-md-12">
			<div class="col-md-8">	
				<br />
				<?php  echo render($form["actions"]["submit"]);?>
			</div>
		</div>
	</div>
</div>
			
			