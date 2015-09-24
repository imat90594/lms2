<div id="title-header">
    <h1 class="no-margin-top">My Certificates</h1>
</div>
<?php if($data):?>
	<h3 class="course-card-header"><strong>You have <?php echo count($data)?> certifcates ready!</strong></h3>
	<br />
	<?php foreach($data as $cert):?>
		<?php $img = file_load($cert->opigno_course_image_fid);
		$url = file_create_url($img->uri);?>
		<div class="panel panel-default course-card certficate-container">
		   <div class="panel-body">
		      <div class="col-lg-2 course-thumbnail-placeholder" style="background-image: url('<?php print $url?>')"></div>
		      <div class="col-lg-10 course-card-info">
		         <div class="col-lg-9">
		            <h3 class="course-card-header no-margin-bottom"><span class="field-content">
		            	<a href="/node/<?php echo $cert->gid?>/quizzes"><strong>Course: <?php echo $cert->title?></strong></a></span></h3>
		            <div class="course-card-body font-regular">
		               <p><strong>Congratulations! Your certificate is ready for this course!</strong></p>
		            </div>
		            <div class="course-progress text-primary">
		               <div class="col-lg-10 no-padding">
		               		<b>Course Process</b>
		               </div>
		               <div class="col-lg-2 no-padding hidden-xs">
		              	 	<img src="/sites/all/themes/daisyflo/img/theme/congrats.png" >
		               </div>
		               
		               <div class="col-lg-11 no-padding">
			               <div class="progress">
			                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			                     <span class="sr-only">100% Complete</span>
			                  </div>
			               </div>
		               </div>
		            </div>
		         </div>
		         <div class="col-lg-3">
		            <div class="">
			             <h3 class="course-card-header no-margin-bottom">
			             	<strong><span class="glyphicon glyphicon-download-alt"></span><a target="_blank" href="/certficates/get/<?php echo $cert->gid?>">Download</a></strong>
			             </h3>
			             <h3 class="course-card-header">
			             	<strong><span class="glyphicon glyphicon-print"></span><a target="_blank" href="/certficates/get/<?php echo $cert->gid?>">Print</a></strong>
			             </h3>
			             <a href="/node/<?php echo $cert->gid?>/quizzes">
						 	<button class="btn btn-primary cert-view-btn">View Course</button>
						 </a>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
	<?php endforeach?>
<?else:?>

<p>You have no certificates at this moment.</p>

<?php endif?>