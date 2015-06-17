<h2>Listing <span class='muted'>Images</span></h2>
<br>
<?php if ($images): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Group</th>
			<th>Url</th>
			<th>Md5 hash</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($images as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->group; ?></td>
			<td><?php echo $item->url; ?></td>
			<td><?php echo $item->md5_hash; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('image/view/'.$item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('image/edit/'.$item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('image/delete/'.$item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Images.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('image/create', 'Add new Image', array('class' => 'btn btn-success')); ?>

</p>
