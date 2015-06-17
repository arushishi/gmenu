<h2>Viewing <span class='muted'>#<?php echo $image->id; ?></span></h2>

<p>
	<strong>Name:</strong>
	<?php echo $image->name; ?></p>
<p>
	<strong>Group:</strong>
	<?php echo $image->group; ?></p>
<p>
	<strong>Url:</strong>
	<?php echo $image->url; ?></p>
<p>
	<strong>Md5 hash:</strong>
	<?php echo $image->md5_hash; ?></p>

<?php echo Html::anchor('image/edit/'.$image->id, 'Edit'); ?> |
<?php echo Html::anchor('image', 'Back'); ?>