<h2 class="text-primary">My Courses</h2>
<?php foreach ($rows as $id => $row): ?>
<div class="panel panel-default course-card">
	<?php print $row; ?>
</div>
<?php endforeach; ?>
