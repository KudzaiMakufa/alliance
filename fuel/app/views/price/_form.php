<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Billboard price', 'billboard_price', array('class'=>'control-label')); ?>

				<?php echo Form::input('billboard_price', Input::post('billboard_price', isset($price) ? $price->billboard_price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Billboard price')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>