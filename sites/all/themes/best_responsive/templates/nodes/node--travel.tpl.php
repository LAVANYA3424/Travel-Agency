<?php if (!empty($node->field_subtitle['und'][0]['value'])): ?>
	<div class="subtitle" > <?php print $node->field_subtitle['und'][0]['value']; ?> </div>
<?php endif ?>

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
		<?php print l(,t('Booking'),'reservation/'.$node->nid); ?>
	</div>
<?php endif ?>