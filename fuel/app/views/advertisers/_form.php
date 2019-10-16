		<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($advertiser) ? $advertiser->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last name', 'last_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_name', Input::post('last_name', isset($advertiser) ? $advertiser->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Organisation', 'organisation', array('class'=>'control-label')); ?>

				<?php echo Form::input('organisation', Input::post('organisation', isset($advertiser) ? $advertiser->organisation : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Organisation')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Organisation address', 'organisation_address', array('class'=>'control-label')); ?>

				<?php echo Form::input('organisation_address', Input::post('organisation_address', isset($advertiser) ? $advertiser->organisation_address : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Organisation address')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone number', 'phone_number', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone_number', Input::post('phone_number', isset($advertiser) ? $advertiser->phone_number : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone number')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($advertiser) ? $advertiser->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Password', 'password', array('class'=>'control-label')); ?>

				<?php echo Form::input('password', Input::post('password', isset($advertiser) ? $advertiser->password : ''), array('class' => 'col-md-4 form-control', 'type'=>'password')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Confirm Password', 'password2', array('class'=>'control-label')); ?>

				<?php echo Form::input('password2', Input::post('password2', isset($advertiser) ?  '' : ''), array('class' => 'col-md-4 form-control', 'type'=>'password')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>