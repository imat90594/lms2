<div class="suggested-courses">
	<?php $in_ctr = 0?>
	<?php foreach ($rows as $id => $row): ?>
		<?php if ($id%3 == 0 || $id == 0):?>
		<div class="row">
		<?php endif;?>
		<?php $in_ctr++?>	
			<div class="col-lg-4 suggested-course">
				<div class="panel panel-default course-card">
					<?php print $row; ?>
				</div>
			</div>
		<?php if ($in_ctr == 3):?>
		</div>
		<?php $in_ctr = 0?>
		<?php endif;?>
	<?php //endif;?>
	<?php endforeach; ?>
</div>
