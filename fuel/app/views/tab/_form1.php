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

		<?php echo Form::input('tab_name', Input::post('tab_name', isset($tab) ? $tab->tab_name : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab name', 'readonly' => 'readonly')); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Image on', 'image_on', array('class' => 'control-label')); ?>

		<?php echo Form::select('image_on', (isset($tab) ? $tab->image_on : ''), $imageinfos); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Image off', 'image_off', array('class' => 'control-label')); ?>

		<?php echo Form::select('image_off', (isset($tab) ? $tab->image_off : ''), $imageinfos); ?>

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
		//echo Form::select('tab_kind', Input::post('tab_kind', isset($tab) ? $tab->tab_kind : 'html'), array('' => '',
		echo Form::select('tab_kind', 'html', array('' => '',
			'html' => 'html',
			'link' => 'link',
			), array('class' => 'col-md-4 form-control', 'placeholder' => 'Tab kind', 'id' => 'form_tabkind')
		);
		?>

	</div>
	<div class="form-group html_div">
		<?php echo Form::label('Url', 'url', array('class' => 'control-label')); ?>

		<?php echo Form::input('url', Input::post('url', isset($tab) ? $tab->url : ''), array('class' => 'col-md-4 form-control', 'placeholder' => 'Url')); ?>

	</div>
	<div class="form-group link_div">
		<?php echo Form::label('Row num', 'row_num', array('class' => 'control-label')); ?>

		<?php echo Form::input('row_num', Input::post('row_num', isset($tab) ? $tab->row_num : '5'), array('class' => 'col-md-4 form-control', 'placeholder' => 'Row num')); ?>

	</div>
	<div class="form-group link_div">
		<?php echo Form::label('Column num', 'column_num', array('class' => 'control-label')); ?>

		<?php echo Form::input('column_num', Input::post('column_num', isset($tab) ? $tab->column_num : '3'), array('class' => 'col-md-4 form-control', 'placeholder' => 'Column num')); ?>

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

<script type="text/javascript">// <![CDATA[
    $(document).ready(function () {

        // select選択変更時
        $('#form_tabkind').change('click', form_change);

        // 再表示などの際に表示する
        $('#form_tabkind').ready(form_change);

        // formの入力箇所変更
        function form_change() {

            if ($("#form_tabkind option:selected").val() == "")
            {
                $(".html_div").hide();
                $(".link_div").hide();
            } else if ($("#form_tabkind option:selected").val() == "html") {
                $(".html_div").show();
                $(".link_div").hide();
            } else {
                $(".html_div").hide();
                $(".link_div").show();
            }

        }
    });
    // ]]></script>
