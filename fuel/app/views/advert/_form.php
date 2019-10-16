<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Advert Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($advert) ? $advert->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
		<br>
		<div>
			<?php echo Form::label('Organisation', 'organisation', array('class'=>'control-label')); ?>
		</div>
		<div class="form-group">
		

				<?php echo Form::input('organisation', Input::post('organisation', isset($advert) ? $advert->organisation : ''), array('class' => 'col-md-4 form-control', 'id'=>'doctor','type'=>'hidden')); ?>
				<?php echo Form::input('organisation_code', Input::post('organisation_code', isset($advert) ? $advert->organisation : ''), array('class' => 'col-md-4 form-control', 'id'=>'doctor_code','disabled'=>'disabled')); ?>
				<span class="input-group-addon libspicker" onclick="viewPatients()">Pick</span>

		</div>
		<?php echo Form::label('Location', 'location', array('class'=>'control-label')); ?>
		<div class="form-group">
			

				<?php echo Form::input('location', Input::post('location', isset($advert) ? $advert->location : ''), array('class' => 'col-md-4 form-control', 'id'=>'location','type'=>'hidden')); ?>

				<?php echo Form::input('location_code', Input::post('location_code', isset($advert) ? $advert->location : ''), array('class' => 'col-md-4 form-control', 'id'=>'location_code','disabled'=>'disabled')); ?>
				<span class="input-group-addon libspicker" onclick="viewPatients2()">Pick place</span>

		</div>
		<div class="form-group">
			<?php echo Form::label('Duration', 'duration', array('class'=>'control-label')); ?>

				<?php
				echo Form::select('duration', Input::post('duration', isset($advert) ? $advert->duration : ''),
					Custom_UserUtility::duration(),			
					 array('class' => 'form-control'));
					 ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Start date', 'start_date', array('class'=>'control-label')); ?>

				<?php echo Form::input('start_date', Input::post('start_date', isset($advert) ? $advert->start_date : ''), array('class' => 'col-md-4 form-control datepicker', 'placeholder'=>'Start date')); ?>

		</div>
		<!-- <div class="form-group">
			<?php //echo Form::label('Price', 'price', array('class'=>'control-label')); ?>

				<?php // echo Form::input('price', Input::post('price', isset($advert) ? $advert->price : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Price')); ?>

		</div> -->

		<div class="form-group" align="center">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
	<?php echo render('advert/_pickOrganisation'); ?>
	<?php echo render('advert/_pickLocation'); ?>
	

	<script>
	function viewPatients()
 		{
			$('#viewDoctors').modal();
		}
	function viewPatients2()
 		{
			$('#viewBranches').modal();
		}
	</script>
<?php echo Form::close(); ?>