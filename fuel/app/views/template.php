<?php 
// list(, $userid) = Auth::get_user_id();

// if($userid == 0){

// 	Session::set_flash('error','You must login in first');
// 	Response::redirect('login');
// }

?>
<!

<html>

<head>
<title><?php 

if(!$title){}else{echo $title;} ?></title>

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

<?php echo Asset::css('dashboard/dashboard.css') ; ?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>

<div id="wrapper" class="active">  
    <!-- Sidebar -->
            <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Alliance Media<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">

        <li><a href="<?php echo Uri::base().'dashboard' ; ?>" > Dashboard <span class= "sub_icon glyphicon glyphicon-link"></span></a></li> 
          <li><a href="<?php echo Uri::base().'advertisers' ; ?>">Client accounts<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
           <ul class="sidebar-nav" id="sidebar">

                <li><a href="<?php echo Uri::base().'advert' ; ?>">New Advert<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
                <li><a href="<?php echo Uri::base().'slot' ; ?>">Add Billboard Place<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
              
           </ul>

           <li><a href="<?php echo Uri::base().'price' ; ?>">Adjust Price<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
          


          <li><a href="<?php echo Uri::base().'login/logout' ; ?>">Logout<span class="sub_icon glyphicon glyphicon-link" ></span></a></li>
         
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead" align ="center" > <?php echo Asset::img('logo.jpg') ; ?> </p>
              
              
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->

                        <form id="contact" method="post" class="form" role="form">

                        <div class="col-md-12">
			<h1><?php echo ""; ?></h1>
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
                        </form>
                  
                </div> <!-- fim div da esquerda -->
            </div>
              <p class="well lead">  <a href="#">Alliance media</a>    Be seen all over  Africa</p> 
            </div>
          </div>
        </div>
    </div>
      
</div>
 <?php echo Asset::js(array(
      'bootstrap.min.js',
      'fastclick.js',
      'nprogress.js',
      'custom.min.js'
    )); ?>

<script>

$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>

<html>


