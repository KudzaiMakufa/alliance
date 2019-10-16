<h2>New Advert</h2>
<style>
		body { margin: 40px; }
		.libspicker {
			cursor: pointer;
			background: #2CA5A0;
			color: #fff;
			border-radius: 15px;
			width: 15%;
			height: 34px;
			float: left
		}

		#doctor_code ,#location_code{
			width : 85% ;
		}

	</style>
<br>

<?php echo render('advert/_form'); ?>


<p><?php echo Html::anchor('advert', 'Back'); ?></p>
