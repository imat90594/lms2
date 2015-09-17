<div class="navbar navbar-inverse navbar-fixed-top secondary-bg-color" role="navigation">
	<div class="header">
		<div class="container">
			<div class="navbar-header no-padding primary-bg-color">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand text-tertiary primary-bg-color" href="/">
					ONLINE
						<br />COURSES
				</a>
			</div>
			<div class="nav navbar-nav navbar-left hidden-sm hidden-xs no-padding ">
				<div class="font-regular">
				<p>
					<span class="font-thin">Call for instant assistance: </span> int +447 1795 2394872 <span class="text-primary">|</span> 024 9274 247
				</p>
			</div>
			</div>
					
			<div class="no-padding  nav navbar-nav navbar-right hidden-sm hidden-xs">
				<?php if ($logged_in): ?>
					<a class=" btn btn-primary" href="/user/logout"><span class="glyphicon glyphicon-user"></span> <?php print t("logout") ?></a>
				<?php else: ?>
					<a class="search text-tertiary" href="#"><span class="glyphicon glyphicon-search"></span></a>
					<a class=" btn btn-secondary login" href="/user/login"><?php print t("Log In")?></a>
					<a class=" btn btn-primary register" href="/user/register"><?php print t("Sign In")?></a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
	<?php if (!empty($breadcrumb) && user_is_logged_in()): ?>
	<div class="nav-breadcrumbs">
		<div class="container">
			<?php print $breadcrumb; ?>
		</div>
	</div>
	<?php endif; ?>
</div>