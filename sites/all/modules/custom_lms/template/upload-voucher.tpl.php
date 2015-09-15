<?php $form = drupal_get_form('upload_voucher_form'); ?>
<?php print '<form enctype="multipart/form-data" id="'.$form['#id'].'" accept-charset="UTF-8" method="'.$form['#method'].'" action="'.$form['#action'].'">'; ?>
<?php print drupal_render_children($form); ?>
</form>


<br />
<br />
<table class="table">
	<thead>
		<tr>
			<th>Voucher Code</th>
			<th>Course  ID</th>
			<th>Is Used</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($vouchers as $voucher):?>
			<tr>
				<td><?php echo $voucher->voucher_code?></td>
				<td><?php $title = node_load($voucher->course_id)->title; echo $title?></td>
				<td><?php echo $voucher->is_used == "1" ? "Yes" : "No";?></td>
			</tr>		
		<?php endforeach ?>
	</tbody>
</table>