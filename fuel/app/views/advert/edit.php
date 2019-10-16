<h2>Editing Advert</h2>
<br>

<?php echo render('advert/_form'); ?>
<p>
	<?php echo Html::anchor('advert/view/'.$advert->id, 'View'); ?> |
	<?php echo Html::anchor('advert', 'Back'); ?></p>
