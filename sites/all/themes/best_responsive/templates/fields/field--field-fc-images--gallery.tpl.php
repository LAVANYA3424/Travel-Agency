<ul id="gellery" class="grid-3" >
		<?php foreach ($items as $k => $v): ?>
			<?php
					if (!empty($v['entity']['field_collection_item'])) {
						$item = reset($v['entity']['field_collection_item']);
						if (!empty($item['field_image']['#items'][0]['uri'])) {
							$src = file_create_url($item['field_image']['#items'][0]['uri']);
							$style = image_style_url('thumb_300x250',$item['field_image']['#items'][0]['uri']);
						}
					}
			?>
		<?php if (!empty($src)): ?>
			<div>
				<a class="fancybox" rel='garelly' href="<?php print $src ; ?>"><img src="<?php print $style; ?>"></a>
			</div>
		<?php endif ?>
	<?php endforeach ?>
</ul>