<?php 
$form['name']['#description'] = "";
// $form['name']['#prefix']      = "";
$form['name']['#attributes']['placeholder'] = t('Email');
$form['name']['#title_display'] = 'invisible';

$form['pass']['#description'] = "";
// $form['pass']['#prefix']      = "";
// $form['pass']['#suffix']      = "";
$form['pass']['#attributes']['placeholder'] = t('Password');
$form['pass']['#title_display'] = 'invisible';

$form['actions']['#suffix']   = "";
$form['actions']['submit']['#value']  = "LOG IN";

// echo "<br /> <br /><br /><br /><br /><br /><br />";
// echo kprint_r($form, true);

?>

<div class="full-banner login-banner jumbotron no-margin-bottom">
	<div class="text-center">
		<br />
		<br />
		<h1 class="text-tertiary"><span class="font-thin">Welcome to Online</span> Courses</h1>
		<h2 class="text-quarternary lms-header no-margin">Learning Management System</h2>
	</div>
</div>

<div class="jumbotron no-padding">
	<h2 class="no-padding">Login</h2>
</div>

<div class="jumbotron">
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
						<?php echo render($form['name']);?>
					</div>
					<div class="login-field-container">
						<?php echo render($form['pass']);?>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<?php echo render($form['actions']);?>
						 <?php print fboauth_action_display('connect'); ?>
						</div>
					</div>
					<?php print drupal_render_children($form);?>
				</div>
			</div>
		</div>
		<div class="col-md-3 hidden-xs no-padding">
		</div>
</div>
</div>


