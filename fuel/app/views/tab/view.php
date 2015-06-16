<h2>Viewing <span class='muted'>#<?php echo $tab->id; ?></span></h2>

<p>
	<strong>Id:</strong>
	<?php echo $tab->id; ?></p>
<p>
	<strong>School id:</strong>
	<?php echo $tab->school_id; ?></p>
<p>
	<strong>Tab index:</strong>
	<?php echo $tab->tab_index; ?></p>
<p>
	<strong>Tab name:</strong>
	<?php echo $tab->tab_name; ?></p>
<p>
	<strong>Image on:</strong>
	<?php echo $tab->image_on; ?></p>
<p>
	<strong>Image off:</strong>
	<?php echo $tab->image_off; ?></p>
<p>
	<strong>Image hash on:</strong>
	<?php echo $tab->image_hash_on; ?></p>
<p>
	<strong>Image hash off:</strong>
	<?php echo $tab->image_hash_off; ?></p>
<p>
	<strong>Tab kind:</strong>
	<?php echo $tab->tab_kind; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $tab->url; ?></p>
<p>
	<strong>Row no:</strong>
	<?php echo $tab->row_no; ?></p>
<p>
	<strong>Column no:</strong>
	<?php echo $tab->column_no; ?></p>
<p>
	<strong>Start date:</strong>
	<?php echo $tab->start_date; ?></p>
<p>
	<strong>End date:</strong>
	<?php echo $tab->end_date; ?></p>

<?php echo Html::anchor('tab/edit/'.$tab->id, 'Edit'); ?> |
<?php echo Html::anchor('tab', 'Back'); ?>