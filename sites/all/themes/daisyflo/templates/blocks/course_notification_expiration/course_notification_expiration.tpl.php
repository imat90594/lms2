
<div id="expired_courses_modal" class="modal fade" role="dialog">
  <span id="has_expiration" class="hidden"><?php echo is_array($courses) ? "1" : "0"?></span>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title text-secondary text-center">REMINDER/ COURSE EXPIRATIONS</h5>
      </div>
      <div class="modal-body">
		<?php foreach($courses as $course):?>
	        <p class="text-secondary text-center">
	        	<?php echo $course->title?> is about to expired in <?php echo $course->expiration_days?> days. 
	        	<br />
	        	<br />
	        	<strong>
	        		<a href="/extend/<?php echo $course->gid?>">EXTEND YOUR ACCESS NOW!</a>
	        	</strong>
			</p>
		<?php endforeach?>
      </div>
    </div>
  </div>
</div>
