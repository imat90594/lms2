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


$form['actions']['submit']['#value']  = "Thats It!";

?>


<div class="full-banner login-banner jumbotron no-margin-bottom">
	<div class="text-center">
		<br />
		<br />
		<h1 class="text-tertiary"><span class="font-thin">Welcome to Online</span> Courses</h1>
		<h2 class="text-quarternary lms-header no-margin">Learning Management System</h2>
	</div>
</div>

<div class="jumbotron no-padding login-bottom-banner">
	<div class="container">
		<h2 class="pull-left login-bottom-header">Login</h2>
		<h4 class="pull-right login-bottom-header-2">Home <strong>> Login </strong></h4>
	</div>
</div>



<div class="jumbotron login-jumbotron">
	<div class="login-container">
		<div class="col-md-3 hidden-xs no-padding">
		</div>
		<div class="col-md-6 col-xs-12 no-padding">
			<div class="panel panel-default ">
				<div class="panel-heading primary-bg-color">
					<div class="text-center">
						<h2 class="text-tertiary no-margin already-title">Already Have Account?</h2>
					</div>
				</div>
				<div class="panel-body login-panel-body">
					<div class="login-field-container">
						<?php if(form_get_errors()):?>
							<div class="alert alert-danger fade in">
							<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">x</a>
								<ul>
								<?php foreach(form_get_errors() as $error):?>
										<li><?php echo $error?></li>
								<?php endforeach?>
								</ul>
							</div>
						<?php endif?>
					</div>
					<div class="login-field-container">
						<?php echo render($form["field_first_name"]);?>
					</div>
					<div class="login-field-container">
						<?php echo render($form["field_last_name"]);?>
					</div>
					<div class="login-field-container">
						 <?php 	echo render($form["account"]["mail"]);?>
					</div>
					<div class="row hidden">
						<?php 	echo render($form["account"]["pass"]);?>
					</div>
					<div class="login-field-container">
						<?php 	echo render($form["account"]["pass"]["pass1"]);?>
					</div>
					<div class="login-field-container">
						<?php 	echo render($form["account"]["pass"]["pass2"]);?>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php echo render($form['actions']);?>
						</div>
					</div>
					<hr />
					<div class="row">
						<div class="col-sm-12 text-center">
							 <p id="login-fb">Simply Sign in with <strong>Facebook</strong></p>
							 <?php print fboauth_action_display('connect'); ?>
							 <?php print drupal_render_children($form);?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 hidden-xs no-padding">
		</div>
	</div>
</div>


