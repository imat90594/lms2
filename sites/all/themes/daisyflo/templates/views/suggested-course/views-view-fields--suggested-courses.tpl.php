<div class="panel-body">
	<div class="course-card-header">
		<div class="course-thumbnail">
			<div class="course-thumbnail-placeholder" style="background-image: url('<?php print strip_tags($fields['opigno_course_image']->content);?>')">
			</div>
		</div>
		<div class="course-card-title no-margin">
			<h3 class="no-margin"><?php print $fields['title']->content;?></h3>
		</div>
		<span class="course-tag quaternary-bg-color">
			<!-- Put Price here -->
			HOT DEAL
		</span>
	</div>
	<div class="course-card-body no-padding-bottom">
		<p class="course-instructor no-margin">Instructor Steive Mechore</p>
		<p class="course-description no-margin">
			<ul>
				<li>50 course modules</li>
				<li>Certificate of Completion</li>
				<li>Free office app</li>
			</ul>
		</p>
	</div>
	<div class="course-card-footer no-padding-right no-padding-top">
		<span class="course-actions col-lg-8">
			<span class="buy-now-container"> 
			<?php print $fields['add_to_cart_form']->content;?>
			</span>
		</span>
		<span class="course-tag col-lg-4 no-padding-right">
			<span class="course-price">
			<!-- Put Price here -->
			45$
			</span>
		</span>
	</div>
</div>

<!-- <div class="panel-body">
	<div class="row course-card-header">
		<div class="col-md-6 course-card-title">
			<small class="text-tertiary">COURSE NAME</small>
			<h2><?php print $fields['title']->content;?></h2>
		</div>
		<div class="col-md-6 course-card-timer">
			<span class="course-icon"><img src="/sites/all/themes/daisyflo/img/theme/pup.png"></span>
			<span class="course-teaser">
				<a class="text-muted start-course-now">Start this course now!</a>
			</span>
		</div>
	</div>
	<div class="row course-card-body">
		<div class="col-md-3 course-thumbnail">
			<div class="course-thumbnail-placeholder" style="background-image: url('<?php print strip_tags($fields['opigno_course_image']->content);?>')">
			</div>
		</div>
		<div class="col-md-9 course-details">
			<h3>About the Course</h3>
			<p> 
				<?php print $fields['body']->content;?>
			</p>
			
		</div>
	</div>
</div>
<div class="panel-footer">
	<span class="buy-now-container">	
		<?php print $fields['add_to_cart_form']->content;?>
	</span>
</div>

 -->