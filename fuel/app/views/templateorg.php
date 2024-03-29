<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	
	<?php echo Asset::css('bootstrap.css'); ?>
	 <!-- lets attach css files -->
	 <?php echo Asset::css(array(
    	'bootstrap.min.css',
    	'font-awesome/css/font-awesome.min.css',
    	//'custom/custom.min.css',
    	//'custom/libs-patch.css'
    )); ?>
	 <?php  echo Asset::js('jquery.min.js'); ?>
	 <?php echo Asset::css('bootstrap-datepicker3.standalone.min.css'); ?>
 	<?php echo Asset::js(array(
    	'bootstrap-datepicker.js',
    )); ?>
	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h1><?php echo $title; ?></h1>
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="https://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo e(Fuel::VERSION); ?></small>
			</p>
		</footer>
	</div>

	            	<!-- lets attach some javascript -->
    <?php echo Asset::js(array(
    	'bootstrap.min.js',
    	'fastclick.js',
    	'nprogress.js',
    	'custom.min.js'
    )); ?>
</body>
</html>
