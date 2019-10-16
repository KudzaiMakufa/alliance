<h2>Viewing #<?php echo $advert->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $advert->name; ?></p>
<p>
	<strong>Organisation:</strong>
	<?php echo $advert->organisation; ?></p>
<p>
	<strong>Location:</strong>
	<?php echo $advert->location; ?></p>
<p>
	<strong>Duration:</strong>
	<?php echo $advert->duration; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $advert->start_date; ?></p>
<p>
	<strong>Price:</strong>
	<?php echo $advert->price; ?></p>


<?php echo Html::anchor('advert', 'Back'); ?>