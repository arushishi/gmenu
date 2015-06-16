<?php echo Form::open(array("class" => "form-horizontal")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Id', 'id', array('class' => 'control-label')); ?>

		<?php echo Form::input('id', Input::post('id', isset($tab) ? $tab->id : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Id')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('School id', 'school_id', array('class' => 'control-label')); ?>

		<?php echo Form::input('school_id', Input::post('school_id', isset($tab) ? $tab->school_id : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'School id')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Tab index', 'tab_index', array('class' => 'control-label')); ?>

		<?php echo Form::input('tab_index', Input::post('tab_index', isset($tab) ? $tab->tab_index : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab index')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Tab name', 'tab_name', array('class' => 'control-label')); ?>

		<?php echo Form::input('tab_name', Input::post('tab_name', isset($tab) ? $tab->tab_name : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab name')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Image on', 'image_on', array('class' => 'control-label')); ?>

		<?php echo Form::input('image_on', Input::post('image_on', isset($tab) ? $tab->image_on : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Image on')); ?>
		<?php echo Form::file('image_on', array('class' => 'col-md-4 form-control', 'placeholder' => 'Image on')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Image off', 'image_off', array('class' => 'control-label')); ?>

		<?php echo Form::input('image_off', Input::post('image_off', isset($tab) ? $tab->image_off : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Image off')); ?>

	</div>
	<!--div class="form-group">
	<?php echo Form::label('Image hash on', 'image_hash_on', array('class' => 'control-label')); ?>

	<?php echo Form::input('image_hash_on', Input::post('image_hash_on', isset($tab) ? $tab->image_hash_on : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Image hash on')); ?>

	</div-->
	<!--div class="form-group">
	<?php echo Form::label('Image hash off', 'image_hash_off', array('class' => 'control-label')); ?>

	<?php echo Form::input('image_hash_off', Input::post('image_hash_off', isset($tab) ? $tab->image_hash_off : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Image hash off')); ?>

	</div-->
	<div class="form-group">
		<?php echo Form::label('Tab kind', 'tab_kind', array('class' => 'control-label')); ?>

		<!--?php echo Form::input('tab_kind', Input::post('tab_kind', isset($tab) ? $tab->tab_kind : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab kind')); ?-->
		<?php
		echo Form::select('tab_kind', Input::post('tab_kind', isset($tab) ? $tab->tab_kind : ''), array('' => '',
			'link' => 'link',
			'html' => 'html',
			), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab kind')
		);
		?>

	</div>
	<div class="form-group">
<?php echo Form::label('Url', 'url', array('class' => 'control-label')); ?>

		<?php echo Form::input('url', Input::post('url', isset($tab) ? $tab->url : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Url')); ?>

	</div>
	<div class="form-group">
<?php echo Form::label('Row no', 'row_no', array('class' => 'control-label')); ?>

		<?php echo Form::input('row_no', Input::post('row_no', isset($tab) ? $tab->row_no : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Row no')); ?>

	</div>
	<div class="form-group">
<?php echo Form::label('Column no', 'column_no', array('class' => 'control-label')); ?>

		<?php echo Form::input('column_no', Input::post('column_no', isset($tab) ? $tab->column_no : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Column no')); ?>

	</div>
	<div class="form-group">
<?php echo Form::label('Start date', 'start_date', array('class' => 'control-label')); ?>

		<?php echo Form::input('start_date', Input::post('start_date', isset($tab) ? $tab->start_date : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Start date')); ?>

	</div>
	<div class="form-group">
<?php echo Form::label('End date', 'end_date', array('class' => 'control-label')); ?>

		<?php echo Form::input('end_date', Input::post('end_date', isset($tab) ? $tab->end_date : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'End date')); ?>

	</div>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
</fieldset>
		<?php echo Form::close(); ?>