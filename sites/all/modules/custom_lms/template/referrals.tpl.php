<div class="row no-margin referrals">
	<div id="title-header">
		<h1><strong>Referrals</strong></h1>
	</div>
	
	<?php $domain = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME']; ?>
	
	<div class="panel panel-default course-card referrals-holder">
		<div class="panel-body">
			<div class="col-md-12">
				<div class="col-md-6 no-padding-left">
					<h3 class="no-margin-top"><strong>SHARE OUR WEBSITE</strong></h3>
					<input type="text" class="form-control" value="<?php echo $domain?>" disabled />
				</div>
				<div class="col-md-6">
					<div class="col-md-12 no-padding-left">
						<h3 class="no-margin-top"><strong>SHARE VIA</strong></h3>
					</div>
					<div class="col-md-2 no-padding-left">
						<div class="fb-share-button" data-href="http://student.daisyflo.com" data-layout="button">
						</div>
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=990704671019493";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
					</div>
					<div class="col-md-1">
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://daisyflo.com" data-text="Check out this site!" data-count="none">Tweet</a>
					</div>
				</div>
			</div>
				
		
		</div>
	</div>
	<div class="panel panel-default course-card referrals-holder-bottom">
		<div class="panel-body">
			<p>Reference site about <span class="text-primary">Lorem Ipsum</span>, 
			giving information on its origins, as well as a random Lipsum generator.
			giving information on its origins, as well <span class="text-primary">Lorem Ipsum</span>,  as a random Lipsum generator.</p>
		</div>
	</div>
	
	<div id="title-header">
		<h1><strong>My Referrals</strong></h1>
	</div>
	
	<div class="col-md-12">
		<p>Reference site about <span class="text-primary">Lorem Ipsum</span>, 
				giving information on its origins, as well as a random Lipsum generator.
				giving information on its origins, as 
				well <span class="text-primary">Lorem Ipsum</span>,  as a random Lipsum generator.
		</p>
		
		<img src="/sites/all/themes/daisyflo/img/theme/process.png" class="img-responsive" />
	</div>
	
	
	
</div>