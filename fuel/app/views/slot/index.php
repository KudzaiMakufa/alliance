<h2>Listing Slots</h2>
<br>
<?php if ($slots): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Place</th>
			<th>Occupied</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($slots as $item): ?>		<tr>

			<td><?php echo $item->place; ?></td>
			<td><?php echo $item->occupied; ?></td>
			<td>
				
				  <?php echo Html::anchor('slot/edit/'.$item->id, '<i class="glyphicon glyphicon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?> |
                <?php echo Html::anchor('slot/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Slots.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('slot/create', 'Add new Slot', array('class' => 'btn btn-success')); ?>

</p>
