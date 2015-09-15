

<?php if($data):?>


	<?php foreach($data as $cert):?>
		<?php $img = file_load($cert->opigno_course_image_fid);
		$url = file_create_url($img->uri);?>
		<div class="panel panel-default certificate-panel">
			<div class="panel-heading tertiary-bg-color no-border">
				<div class="">
					<h3 class="no-margin no-padding">You have earned Certificate for this course! Good Job!</h3>
				</div>
				<div class="certificate-holder hidden-xs">
					<a target="_blank" href="/certficates/get/<?php echo $cert->gid?>" title="Get Certificate">
						<img src="/sites/all/themes/daisyflo/img/theme/certificate.png" />
					</a>
				</div>
			</div>
			<div class="arrow">
			</div>
			<div class="panel-body">
				<div class="col-xs-2 visible-xs">
				</div>
				<div class="col-md-3 col-xs-10">
					<div class="course-thumbnail-placeholder" style="background-image: url('<?php print $url?>')">
					</div>
				</div>
				<div class="visible-xs col-xs-2">
				</div>
				<div class="col-md-9 col-xs-10">
					<div class="course-info">
						<br class="visible-xs" />
						<span>COURSE NAME</span>
						<h2 class="no-margin"><a target="_blank" href="/certficates/get/<?php echo $cert->gid?>"><?php echo $cert->title?></a></h2>
					</div>
				</div>
				<div class="col-xs-12">
					<br />
					<a target="_blank" class="visible-xs btn btn-primary" href="/certficates/get/<?php echo $cert->gid?>">GET CERTIFICATE</a>
				</div>	
			</div>	
		</div>
		
		
		
	<?php endforeach?>
<?else:?>

<p>You have no certificates at this moment.</p>

<?php endif?>