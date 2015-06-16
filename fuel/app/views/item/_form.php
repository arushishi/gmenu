<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Tab id', 'tab_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('tab_id', Input::post('tab_id', isset($item) ? $item->tab_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tab id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Item row', 'item_row', array('class'=>'control-label')); ?>

				<?php echo Form::input('item_row', Input::post('item_row', isset($item) ? $item->item_row : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Item row')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Item column', 'item_column', array('class'=>'control-label')); ?>

				<?php echo Form::input('item_column', Input::post('item_column', isset($item) ? $item->item_column : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Item column')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Item name', 'item_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('item_name', Input::post('item_name', isset($item) ? $item->item_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Item name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Image on', 'image_on', array('class'=>'control-label')); ?>

				<?php echo Form::input('image_on', Input::post('image_on', isset($item) ? $item->image_on : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Image on')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Image off', 'image_off', array('class'=>'control-label')); ?>

				<?php echo Form::input('image_off', Input::post('image_off', isset($item) ? $item->image_off : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Image off')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Image hash on', 'image_hash_on', array('class'=>'control-label')); ?>

				<?php echo Form::input('image_hash_on', Input::post('image_hash_on', isset($item) ? $item->image_hash_on : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Image hash on')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Image hash off', 'image_hash_off', array('class'=>'control-label')); ?>

				<?php echo Form::input('image_hash_off', Input::post('image_hash_off', isset($item) ? $item->image_hash_off : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Image hash off')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Url', 'url', array('class'=>'control-label')); ?>

				<?php echo Form::input('url', Input::post('url', isset($item) ? $item->url : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Url')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Sso flg', 'sso_flg', array('class'=>'control-label')); ?>

				<?php echo Form::input('sso_flg', Input::post('sso_flg', isset($item) ? $item->sso_flg : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Sso flg')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Start date', 'start_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('start_date', Input::post('start_date', isset($item) ? $item->start_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Start date')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('End date', 'end_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('end_date', Input::post('end_date', isset($item) ? $item->end_date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'End date')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>