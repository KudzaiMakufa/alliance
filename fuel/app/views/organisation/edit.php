<h2>Editing Organisation</h2>
<br>

<?php echo render('organisation/_form'); ?>
<p>
	<?php echo Html::anchor('organisation/view/'.$organisation->id, 'View'); ?> |
	<?php echo Html::anchor('organisation', 'Back'); ?></p>
