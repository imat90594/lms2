<?php //print $fields['body']->content;?>
<?php //print $fields['created']->content;?>
<?php //PRINT kprint_r($fields, true);die;?>
<div class="panel-body">
	<div class="col-lg-2 course-thumbnail-placeholder" 
			style="background-image: url('<?php print strip_tags($fields['opigno_course_image']->content);?>')">
	</div>
	<div class="col-lg-10 course-card-info">
		<div class="col-lg-7">
			<h3 class="course-card-header"><?php print $fields['title']->content;?></h3>
			<div class="course-card-body">
				<p><b>Instructor:</b> Daive Miller</p>
				<p><b>Course Category:</b> Accountancy</p>
				<p><b>Description:</b> Here is a sample description of the text</p>
			</div>
			<div class="course-progress text-primary">
			<b>Course Process</b>
			<div class="progress">
			<?php $progress = _daisyflo_get_course_progress($fields['nid_1']->raw, $user->uid);?>
				<div class="progress-bar" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width: <?php print $progress;?>%">
					<span class="sr-only"><?php print $progress;?>% Complete</span>
				</div>
			</div>
		</div>
		</div>
		<div class="col-lg-5">
			<div class="course-timer"> 
				<p><b>Days left of subscriptions:</b> 555</p>
				<p><b><a href="#" class="text-primary">Go Extended Access</a></b></p>
			</div>
			<div class="card-actions">
			<?php $progress = _daisyflo_get_course_progress($fields['nid_1']->raw, $user->uid);?>
				<?php if ($is_course_taken):?>
				<span class="btn btn-primary">
					<a href="/node/<?php print $is_course_taken?>/take">CONTINUE COURSE</a>
				</span>
				<?php else:?>
				<span class="btn btn-secondary">
					<span><a>TEST ME!</a></span>
				</span>
				<span class="btn btn-primary">
					<?php print $fields['title_2']->content;?>
				</span>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<!--  <div class="panel-footer">-->
	<!-- Add Link Here -->
<!--	<?php if ($is_course_taken):?>
	<span class="btn btn-primary">
		<a href="/node/<?php print $is_course_taken?>/take">CONTINUE COURSE</a>
	</span>
	<?php else:?>
	<span class="btn btn-primary">
		<?php print $fields['title_2']->content;?>
	</span>
	<?php endif;?>
</div> 

<div class="row course-card-header">
		<div class="col-md-6 course-card-title">
			<?php $is_course_taken = _daisyflo_is_course_taken($fields['nid_1']->raw, $user->uid)?>
			<small class="text-tertiary">COURSE NAME</small>
			<h2><?php print $fields['title']->content;?></h2>
		</div>
		<div class="col-md-6 course-card-timer">
			<span class="course-icon">
				<img src="/sites/all/themes/daisyflo/img/theme/pup.png">
			 </span> 
			 <?php $date_text = strip_tags($fields['opigno_user_membership_exp']->content)?>
			 <?php if (!empty($date_text)):?>
			 <span class="course-timer"> 
				<span class="course-timer-label">DAYS <span>:</span> HRS <span>:</span> MINS <span>:</span> SECS </span> 
				<span class="countdown"></span>
				<span class="course-timer-label course-timer-expiration">EXPIRES IN</span>
				<span class="date-text hidden"><?php print ($date_text)?></span>
			</span>
			<?php endif;?>
		</div>
	</div>
	<div class="row course-card-body">
		<div class="col-md-3 col-sm-12 course-thumbnail">
			<div class="course-thumbnail-placeholder"
				style="background-image: url('<?php print strip_tags($fields['opigno_course_image']->content);?>')">
			</div>
		</div>
		<div class="col-md-9 col-sm-12 course-progress">
			<h3>YOUR PROGRESS</h3>
			<div class="progress">
			<?php $progress = _daisyflo_get_course_progress($fields['nid_1']->raw, $user->uid);?>
				<div class="progress-bar" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width: <?php print $progress;?>%">
					<span class="sr-only"><?php print $progress;?>% Complete</span>
				</div>
			</div>
			<small class="progress-start col-lg-4 hidden-xs hidden-sm">Starting Point</small>
			<small class="progress-midway col-lg-4 hidden-xs hidden-sm">You're doing good!</small>
			<small class="progress-end col-lg-4 hidden-xs hidden-sm">Finished!</small>
			<small class="col-lg-12 hidden-md hidden-lg"><?php print $progress;?>% Complete</small>
		</div>
	</div>-->
