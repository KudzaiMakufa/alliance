<h2>Listing Users Accounts</h2>
<br>
<p>
	<?php echo Html::anchor('advertisers/create', 'Add new user', array('class' => 'btn btn-success')); ?>

</p>

<?php if ($advertisers): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Organisation</th>
			<th>Organisation address</th>
			<th>Phone number</th>
			<th>Email</th>
		
			
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($advertisers as $item): ?>		<tr>

			<td><?php echo $item->first_name; ?></td>
			<td><?php echo $item->last_name; ?></td>
			<td><?php echo $item->organisation; ?></td>
			<td><?php echo $item->organisation_address; ?></td>
			<td><?php echo $item->phone_number; ?></td>
			<td><?php echo $item->email; ?></td>
			
			
			<td>
				  <?php echo Html::anchor('advertisers/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View', array('class' => 'btn btn-default btn-sm')); ?> |
                <?php echo Html::anchor('advertisers/edit/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?> |
                <?php echo Html::anchor('advertisers/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>

		

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Users.</p>

<?php endif; ?>