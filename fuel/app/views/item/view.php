<h2>Viewing <span class='muted'>#<?php echo $item->id; ?></span></h2>

<p>
	<strong>Tab id:</strong>
	<?php echo $item->tab_id; ?></p>
<p>
	<strong>Item row:</strong>
	<?php echo $item->item_row; ?></p>
<p>
	<strong>Item column:</strong>
	<?php echo $item->item_column; ?></p>
<p>
	<strong>Item name:</strong>
	<?php echo $item->item_name; ?></p>
<p>
	<strong>Image on:</strong>
	<?php echo $item->image_on; ?></p>
<p>
	<strong>Image off:</strong>
	<?php echo $item->image_off; ?></p>
<p>
	<strong>Image hash on:</strong>
	<?php echo $item->image_hash_on; ?></p>
<p>
	<strong>Image hash off:</strong>
	<?php echo $item->image_hash_off; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $item->url; ?></p>
<p>
	<strong>Sso flg:</strong>
	<?php echo $item->sso_flg; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $item->start_date; ?></p>
<p>
	<strong>End date:</strong>
	<?php echo $item->end_date; ?></p>

<?php echo Html::anchor('item/edit/'.$item->id, 'Edit'); ?> |
<?php echo Html::anchor('item', 'Back'); ?>