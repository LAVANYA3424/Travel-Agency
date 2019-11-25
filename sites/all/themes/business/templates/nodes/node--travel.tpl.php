<h1 class="page-title"> <?php print $node->title ; ?></h1>

<?php if (!empty($node->field_image['und'][0]['uri'])): ?>
<div class⁼"image">
	<?php $src = image_style_url('large',$node->field_image['und'][0]['uri']); ?>
	<img src="<?php print $src; ?> ">
</div>
<?php endif ?>

<div class="subtitle" > <?php print $node->field_subtitle['und'][0]['value']; ?> </div>

<?php if (!empty($node->field_price['und'][0]['value'])): ?>	
	<div class="price">
		<?php print $node->field_price['und'][0]['value']; ?>
	</div>
<?php endif ?>

<?php if (!empty($node->body['und'][0]['value'])): ?>
	<div class="description">
		<?php print $node->body['und'][0]['value']; ?>
	</div>
<?php endif ?>

<?php if (!empty($node->field_travel_type['und'][0]['taxonomy_term']->tid)): ?>
	<div class="booking">
		<?php print l('Booking','/reservation/'.$node->nid); ?>
	</div>
<?php endif ?>