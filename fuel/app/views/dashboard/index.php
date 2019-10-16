<!DOCTYPE html>
<html>
	<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo Uri::base(false);?>/assets/adminlte/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
		<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from adverts ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>

                <p>Adverts placed</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo Uri::base().'advert' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from slots ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?><sup style="font-size: 20px"></sup></h3>

                <p>Bill Boards Slots</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo Uri::base().'slot' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php 
                	 $sql = "select count(*) as rcrds from users ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds ;

                ?></h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo Uri::base().'advertisers' ; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php 
                	 $sql = "select SUM(price) as total from adverts ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['total'] ;

                                            echo "$ ".$rcds." Usd" ;

                ?></h3>

                <p>Total Billboards revenue</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo Uri::base().'dashboard' ; ?>" class="small-box-footer">View per billboard <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->



<!--       table section -->


            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Per billboard revenue</h3>
`
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Billboard id</th>
                      <th>No of times occupied</th>
                      <th>Status</th>
                      <th>Revenue per billboard</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php $slots = Model_slot::find_all() ;if ($slots): ?>

							<?php foreach ($slots as $item): ?>	
								 <tr>
								<td><a href="<?php echo Uri::base().'slot' ; ?>"><?php echo $item->place?></a></td>
								<td><?php 
                						 $sql = "select count(*) as rcrds from adverts where location = '".$item->place."' ";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['rcrds'] ;

                                            echo $rcds." times" ;

              					  ?></td>
								<td><span class="badge badge-success"><?php echo $item->occupied ?></span></td>
								<td>
								<div class="sparkbar" data-color="#00a65a" data-height="20">
								<?php 
									 $sql = "select SUM(price) as total from adverts where location = '".$item->place."'";
                                            $query = DB::query($sql)->execute()->as_array();
                                            $rcds = $query[0]['total'] ;
                                            if($rcds === null){
                                            	echo "$ 0.00 Usd" ;

                                            }else{
                                            	echo "$ ".$rcds." Usd" ;
                                            }

                                            

								 ?>
                	
                				</div>
								</td>
								</tr>
	                   
							<?php endforeach; ?>
						<?php endif; ?><p>





                   
                    
                    </tbody>
                  </table>
                </div>




        <!-- jQuery -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo Uri::base(false);?>/assets/adminlte/dist/js/demo.js"></script>
</body>
</html>

