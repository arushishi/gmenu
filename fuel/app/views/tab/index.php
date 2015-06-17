<?php if ($tabs): ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<!--th>Id</th-->
				<!--th>School id</th-->
				<th>Tab index</th>
				<th>Tab name</th>
				<th>Image on</th>
				<th>Image off</th>
				<!--th>Image hash on</th-->
				<!--th>Image hash off</th-->
				<th>Tab kind</th>
				<th>Url</th>
				<th>Row no</th>
				<th>Column no</th>
				<th>Start date</th>
				<th>End date</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($tabs as $item): ?>
				<tr>
						<!--td><?php echo $item->id; ?></td-->
						<!--td><?php echo $item->school_id; ?></td-->
					<td><?php echo $item->tab_index; ?></td>
					<td><?php echo $item->tab_name; ?></td>
					<td><img src="<?php echo $item->image_on; ?>" /></td><!-- +-->
					<td><img src="<?php echo $item->image_off; ?>" /></td>
					<!--td><?php echo $item->image_hash_on; ?></td-->
					<!--td><?php echo $item->image_hash_off; ?></td-->
					<td><?php echo $item->tab_kind; ?></td>
					<td><?php echo $item->url; ?></td>
					<td><?php echo $item->row_num; ?></td>
					<td><?php echo $item->column_num; ?></td>
					<td><?php echo $item->start_date; ?></td>
					<td><?php echo $item->end_date; ?></td>
					<td>
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php echo Html::anchor('tab/edit/' . $item->id, '<i class="icon-wrench"></i> 修正', array('class' => 'btn btn-default btn-sm')); ?>	<?php echo Html::anchor('tab/view/' . $item->id, '<i class="icon-eye-open"></i> 追加', array('class' => 'btn btn-default btn-sm')); ?>	<?php echo Html::anchor('tab/delete/' . $item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('Are you sure?')")); ?>	<?php echo $item->tab_kind == "link" ? Html::anchor('item/index/' . $item->id . '/' . $item->row_num . '/' . $item->column_num, '<i class="icon-eye-open"></i> アイテム', array('class' => 'btn btn-info btn-sm')) : ""; ?>
							</div>
						</div>

					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
<?php else: ?>
	<p>レコードなし</p>

<?php endif; ?><p>
	<?php echo Html::anchor('tab/create', '追加', array('class' => 'btn btn-success')); ?>

</p>
