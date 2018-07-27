	<?php foreach($permissions_list as $p): ?>
		<input type="checkbox" name="permissions[]" value="<?php echo $p['name']; ?>">
		<?php echo $p['name']; ?>
	<?php endforeach; ?>