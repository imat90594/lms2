<?php 
$form["account"]['name']['#description'] = "";
$form["account"]['name']['#prefix'] = "";

$form["account"]['mail']['#description'] = "";
$form["account"]['mail']['#title']       = "Email";
$form["account"]['mail']['#prefix']      = "";

$form["account"]['pass']['#description'] = "";

$form['actions']["submit"]['#suffix']   = "";
$form['actions']["submit"]['#prefix']   = "";
$form['actions']["submit"]['#value']   = "SAVE ACCOUNT DETAILS";


?>

<div class="edit-profile-container">
	<h1>Your Account Details</h1>
	
	<div class="col-md-12 primary-bg-color form-container">
		<div class="col-md-9">
			<div class="col-md-12">
				<p>You can edit your account details here. Don't forget to click save after you have made the changes.</p>
			</div>
			<div class="col-md-12">
				<?php echo render($form["field_first_name"]);?>
			</div>
			<div class="col-md-12">
				<?php echo render($form["field_last_name"]);?>
			</div>
			<div class="col-md-12">
				 <?php 	echo render($form["account"]["mail"]);?>
			</div>
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
			<div class="col-md-12 hide">
				<?php 	echo render($form["contact"]);?>
			</div>
		</div>
		<div class="col-md-3 hidden-xs hidden-sm">
			<img src="/sites/all/themes/daisyflo/img/theme/paw2.png" />
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
			
			