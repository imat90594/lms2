<div class="navbar navbar-fixed-top navbar-inverse " role="navigation">
	<div class="header secondary-bg-color">
		<div class="container">
			<div class="navbar-header no-padding primary-bg-color">
				<button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand text-tertiary primary-bg-color" href="/">
					<img src="<?php print $logo;?>" height="106%"/>
				</a>
			</div>
			<div class="nav navbar-nav navbar-left hidden-sm hidden-xs no-padding ">
				<div class="font-regular">
				<p>
					<span class="font-thin">Call for instant assistance: </span> int +447 1795 2394872 <span class="text-primary">|</span> 024 9274 247
				</p>
			</div>
			</div>
					
			<div class="no-margin  nav navbar-nav navbar-right hidden-sm hidden-xs" style="">
				<div class="vcontainer hidden-xs">
					<?php if ($logged_in): ?>
						<div class="col-md-3 vcenter no-padding">
							<a class="header-icon" href="#"><img src="/sites/all/themes/daisyflo/img/theme/search.png" /></a>
						</div>
						<div class="col-md-3 vcenter no-padding">
							<a class="header-icon" href="/notification"><img src="/sites/all/themes/daisyflo/img/theme/notify.png" /></a>
						</div>
						
						<?php global $user; 
							$user = user_load($user->uid);
						 ?>
						 
						 <?php if(isset($user->picture->filename)):?>
							 <div class="col-md-2 vcenter no-padding">
						 		<a class="header-icon" href="/user/<?php echo $user->uid?>/edit">
								 	<div class="avatar" style="background-image:url('/sites/default/files/pictures/<?php echo $user->picture->filename?>')">
								 	</div>
								 </a>
							 </div>
	   					 <?else:?>
		   					 <div class="col-md-2 vcenter">
								<a class="header-icon" href="/user/<?php echo $user->uid?>/edit"><img src="/sites/all/themes/daisyflo/img/theme/user-icon.png" class="header-icon-user" /></a>
							 </div>
						 <?php endif?>
						 
					<?php else: ?>
						<a class="search text-tertiary" href="#"><span class="glyphicon glyphicon-search"></span></a>
						<a class=" btn btn-secondary login" href="/user/login"><?php print t("Log In")?></a>
						<a class=" btn btn-primary register" href="/user/register"><?php print t("Sign In")?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<?php if (!empty($breadcrumb) && user_is_logged_in()): ?>
	<div class="nav-breadcrumbs tertiary-bg-color">
		<div class="container">
			<div class="nav-page-title col-lg-6">
				<h1 class="text-secondary">Dashboard</h1>
			</div>
			<div class="nav-breadcrumb">
				<?php print $breadcrumb; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>

