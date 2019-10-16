<h2>Viewing #<?php echo $slot->id; ?></h2>

<p>
	<strong>Place:</strong>
	<?php echo $slot->place; ?></p>
<p>
	<strong>Occupied:</strong>
	<?php echo $slot->occupied; ?></p>

<?php echo Html::anchor('slot/edit/'.$slot->id, 'Edit'); ?> |
<?php echo Html::anchor('slot', 'Back'); ?>