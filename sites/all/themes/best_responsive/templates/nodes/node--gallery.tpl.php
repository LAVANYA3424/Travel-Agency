<?php if (!empty($node->field_fc_images['und'][0])): ?>
	<?php 	
		$f = field_view_field('node', $node,'field_fc_images');
		print render($f);
	?>
<?php endif ?>