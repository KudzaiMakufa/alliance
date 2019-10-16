<h2>Listing Organisations</h2>
<br>
<?php if ($organisations): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($organisations as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td>
				<?php echo Html::anchor('organisation/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('organisation/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('organisation/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Organisations.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('organisation/create', 'Add new Organisation', array('class' => 'btn btn-success')); ?>

</p>
