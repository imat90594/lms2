

<div class="col-md-12">
	<div class="text-center">
		<div class="bg-color-primary">
			<img src="/sites/all/themes/daisyflo/img/theme/pink-pup.png" />
			<h1><span class="text-tertiary">Thank you</span> for purchasing <br> a DaisyFlo Course!</h1>
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<p>You'll be PetPro in no time. Enjoy learning with us!</p>
				<br />
				<p>You will receive an order confirmation email with details of your order and further information to access to your course.
				If you have any question about your order, please email as at <?php echo variable_get('site_mail') ?> </p>
			</div>
			<div class="col-md-3"></div>
			
			<div class="col-md-12">
				<br />
				<br />
				<?php if(user_is_logged_in()):?>
					<a href="/" class="btn btn-primary">BACK TO DASHBOARD</a>
				<?php else:?>
					<a href="/user/login" class="btn btn-primary">LOGIN</a>
				<?php endif?>
			</div>
		</div>
	</div>
</div>