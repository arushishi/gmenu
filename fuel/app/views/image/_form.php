<?php echo Form::open(array("class" => "form-horizontal", "enctype" => "multipart/form-data")); ?>

<fieldset>
	<div class="form-group">
		<?php echo Form::label('Name', 'name', array('class' => 'control-label')); ?>

		<?php echo Form::input('name', Input::post('name', isset($image) ? $image->name : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Name')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Group', 'group', array('class' => 'control-label')); ?>

		<?php echo Form::input('group', Input::post('group', isset($image) ? $image->group : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Group')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::file("upload", array()); ?>

	</div>
	<div class="form-group">
		<label class='control-label'>&nbsp;</label>
		<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
</fieldset>
<?php echo Form::close(); ?>