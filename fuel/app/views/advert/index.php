<h2>Listing Adverts</h2>
<br>
<?php if ($adverts): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Organisation</th>
			<th>Location</th>
			<th>Duration</th>
			<th>Start date</th>
			<th>Price</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($adverts as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->organisation; ?></td>
			<td><?php echo $item->location; ?></td>
			<td><?php echo $item->duration; ?></td>
			<td><?php echo $item->start_date; ?></td>
			<td><?php echo "$ ".$item->price." Usd"; ?></td>
			<td>
				<?php echo Html::anchor('advert/view/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> View', array('class' => 'btn btn-default btn-sm')); ?> |
                <?php echo Html::anchor('advert/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Adverts.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('advert/create', 'Add new Advert', array('class' => 'btn btn-success')); ?>

</p>
