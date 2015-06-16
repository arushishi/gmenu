<h2>Editing <span class='muted'>Tab</span></h2>
<br>

<?php echo render('tab/_form'); ?>
<p>
	<?php echo Html::anchor('tab/view/'.$tab->id, 'View'); ?> |
	<?php echo Html::anchor('tab', 'Back'); ?></p>
