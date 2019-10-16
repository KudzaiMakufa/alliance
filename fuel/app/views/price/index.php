<h2>Listing Prices</h2>
<br>
<?php if ($prices): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Billboard price</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($prices as $item): ?>		<tr>

			<td><?php echo "$ ".$item->billboard_price." Usd per billboard"; ?></td>
			
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Prices.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('price/create', 'Adjust billboard price', array('class' => 'btn btn-success')); ?>

</p>
