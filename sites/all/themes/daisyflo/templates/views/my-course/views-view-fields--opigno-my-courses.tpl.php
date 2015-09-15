<?php //print $fields['body']->content;?>
<?php //print $fields['created']->content;?>
<?php //PRINT kprint_r($fields, true);die;?>
<div class="panel-body">
	<div class="row course-card-header">
		<div class="col-md-6 course-card-title">
			<?php $is_course_taken = _daisyflo_is_course_taken($fields['nid_1']->raw, $user->uid)?>
			<small class="text-tertiary">COURSE NAME</small>
			<h2><?php print $fields['title']->content;?></h2>
		</div>
		<!-- Add Timer via Views -->
		<div class="col-md-6 course-card-timer">
			 
			 <?php $date_text = strip_tags($fields['opigno_user_membership_exp']->content)?>
			 <?php $date_text = date("F d, Y", strtotime($date_text))?>
			 <?php if (true):?>
			 <div class="course-timer pull-right"> 
				<span class="course-timer-label">EXPIRES IN</span>
				<span class="date-text"><?php print ($date_text)?></span>
			</div>
			<?php endif;?>
			<div class="course-icon pull-right">
				<img src="/sites/all/themes/daisyflo/img/theme/pup.png">
			 </div> 
		</div>
	</div>
	<div class="row course-card-body">
		<div class="col-md-3 col-sm-12 course-thumbnail">
			<div class="course-thumbnail-placeholder"
				style="background-image: url('<?php print strip_tags($fields['opigno_course_image']->content);?>')">
			</div>
		</div>
		<!-- Add Progress via Views -->
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
	</div>
</div>
<div class="panel-footer">
	<span class="btn btn-primary">
		<a href="/node/<?php print $fields['nid_1']->raw?>/quizzes">VIEW UNITS</a>
	</span>
	<!-- Add Link Here -->
	<?php if ($is_course_taken):?>
	<span class="btn btn-primary">
		<a href="/node/<?php print $is_course_taken?>/take">CONTINUE WHERE I LEFT OFF</a>
	</span>
	<?php else:?>
	<span class="btn btn-primary">
		<?php print $fields['title_2']->content;?>
	</span>
	<?php endif;?>
</div>
