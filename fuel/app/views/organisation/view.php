<h2>Viewing #<?php echo $organisation->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $organisation->name; ?></p>

<?php echo Html::anchor('organisation/edit/'.$organisation->id, 'Edit'); ?> |
<?php echo Html::anchor('organisation', 'Back'); ?>