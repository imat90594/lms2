<div class="row">

<div id="title-header">
	<h1><strong>My Notifications</strong></h1>
</div>


<?php $notification_viewed = $data->fetchAll()?>
<?php $notification_not_viewed = $notification_viewed?>

<div class="col-md-12">
	<div class="pull-right">
		<button class="btn btn-quarternary notif-btn">Not Viewed</button>
	</div>
	<?php foreach($notification_viewed as $notif):?>
		<?php if($notif->is_new == 1):?>
			<?php $course = node_load($notif->course_id)?>
			<div class="notif-holder col-md-12">
				<div class="col-md-1">
					<img src="/sites/all/themes/daisyflo/img/theme/notif-new.png" />
				</div>
				<div class="col-md-9">
					<p class="font-regular notif-text">
						<strong>
						<?php echo $course->title?> is about to expire in <?php echo $notif->expiration_days?> days. Once it expires
						you can no longer access this course. Click here to extend your access!
						</strong>
					</p>
				</div>
				<div class="col-md-2">
					<p> 
						<strong>
						<?php echo date("F d", strtotime($notif->date_created))?> <br /> 
						<?php echo date("h:i", strtotime($notif->date_created))?>
						</strong>
					</p>
					
				</div>
			</div>
		<?php endif?>
	<?php endforeach?>
</div>



<br />
<br />
<div class="col-md-12">
	<div class="pull-right">
		<button class="btn btn-quarternary notif-btn-mute">Viewed</button>
	</div>
	<?php foreach($notification_not_viewed as $notif):?>
	<?php $course = node_load($notif->course_id)?>
		<?php if($notif->is_new == 0):?>
			<div class="notif-holder col-md-12">
				<div class="col-md-1">
					<img src="/sites/all/themes/daisyflo/img/theme/notif-old.png" />
				</div>
				<div class="col-md-9">
					<p class="font-regular notif-text">
						<strong>
						<?php echo $course->title?> is about to expire in <?php echo $notif->expiration_days?> days. Once it expires
						you can no longer access this course. <a class="text-primary" href="/extend/<?php echo $notif->course_id?>">Click here to extend your access!</a>
						</strong>
					</p>
				</div>
				<div class="col-md-2">
					<p> 
						<strong>
						<?php echo date("F d", strtotime($notif->date_created))?> <br /> 
						<?php echo date("h:i", strtotime($notif->date_created))?>
						</strong>
					</p>
					
				</div>
			</div>
		<?php endif?>
	<?php endforeach?>
	</div>
</div>
