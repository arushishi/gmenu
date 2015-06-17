<h2>Listing <span class='muted'>Items</span></h2>
<br>
<?php if ($items): ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Tab id</th>
				<th>Item row</th>
				<th>Item column</th>
				<th>Item name</th>
				<th>Image on</th>
				<!--th>Image off</th-->
				<!--th>Image hash on</th-->
				<!--th>Image hash off</th-->
				<th>Url</th>
				<th>Sso flg</th>
				<th>Start date</th>
				<th>End date</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($items as $item): ?>		<tr>

					<td><?php echo $item->tab_id; ?></td>
					<td><?php echo $item->item_row; ?></td>
					<td><?php echo $item->item_column; ?></td>
					<td><?php echo $item->item_name; ?></td>
					<td><img src="<?php echo $item->image_on; ?>" /></td>
					<!--td><?php echo $item->image_off; ?></td-->
					<!--td><?php echo $item->image_hash_on; ?></td-->
					<!--td><?php echo $item->image_hash_off; ?></td-->
					<td><a href="<?php echo $item->url; ?>" target="_blank"><?php echo $item->url; ?></a></td>
					<td><?php echo $item->sso_flg; ?></td>
					<td><?php echo $item->start_date; ?></td>
					<td><?php echo $item->end_date; ?></td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php echo Html::anchor('item/view/' . $item->id, '<i class="icon-eye-open"></i> View', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('item/edit/' . $item->id, '<i class="icon-wrench"></i> Edit', array('class' => 'btn btn-default btn-sm')); ?>						<?php echo Html::anchor('item/delete/' . $item->id, '<i class="icon-trash icon-white"></i> Delete', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>					</div>
						</div>

					</td>
				</tr>
			<?php endforeach; ?>	</tbody>
	</table>

<?php else: ?>
	<p>No Items.</p>
	<?php echo Html::anchor('item/create', 'Add new Item', array('class' => 'btn btn-success')); ?>
<?php endif; ?><p>


</p>
