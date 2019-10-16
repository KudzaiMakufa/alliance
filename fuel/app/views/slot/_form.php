<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Place', 'place', array('class'=>'control-label')); ?>

				<?php echo Form::input('place', Input::post('place', isset($slot) ? $slot->place : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Place')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Occupied', 'occupied', array('class'=>'control-label')); ?>

				<?php 
				echo Form::select('occupied', Input::post('occupied', isset($slot) ? $slot->occupied : ''),
					Custom_UserUtility::slot(),			
					 array('class' => 'form-control'));

				?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>