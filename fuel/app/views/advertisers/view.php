<h2>Viewing #<?php echo $advertiser->id; ?></h2>

<p>
	<strong>First name:</strong>
	<?php echo $advertiser->first_name; ?></p>
<p>
	<strong>Last name:</strong>
	<?php echo $advertiser->last_name; ?></p>
<p>
	<strong>Organisation:</strong>
	<?php echo $advertiser->organisation; ?></p>
<p>
	<strong>Organisation address:</strong>
	<?php echo $advertiser->organisation_address; ?></p>
<p>
	<strong>Phone number:</strong>
	<?php echo $advertiser->phone_number; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $advertiser->email; ?></p>
<p>
	<strong>Password:</strong>
	<?php echo $advertiser->password; ?></p>

	
<?php echo Html::anchor('advertisers/edit/'.$advertiser->id, 'Edit'); ?> |
<?php echo Html::anchor('advertisers', 'Back'); ?>