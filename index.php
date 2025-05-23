<?php 
session_start();
include('includes/config.php');
include('includes/format_rupiah.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Rental</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/black.css" title="black" media="all" />

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo-new.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/logo-new.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo-new.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/logo-new.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
</head>
<body>


<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Kemanapun Tujuannya, Car Rental Solusinya.</h1>
            <p>Teman Setia Perjalanan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Pilih Mobil Anda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

    <?php 
      $sql = "SELECT mobil.*, merek.* FROM mobil, merek WHERE merek.id_merek = mobil.id_merek";
      $query = mysqli_query($koneksidb,$sql);
        if(mysqli_num_rows($query)>0)
          {
            while($results = mysqli_fetch_array($query))
          {

    ?>  

    <div class="col-list-3">
      <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_mobil']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($results['image1']);?>" class="img-responsive" alt="image"></a>
          <ul>
            <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($results['bb']);?></li>
            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($results['tahun']);?> Model</li>
            <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($results['seating']);?> Seats</li>
          </ul>
        </div>
        <div class="car-title-m">
          <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_mobil']);?>"><?php echo htmlentities($results['nama_merek']);?> , <?php echo htmlentities($results['nama_mobil']);?></a></h6>
            <span class="price"><?php echo htmlentities(format_rupiah($results['harga']));?> /Hari</span> 
        </div>
        <div class="inventory_info_m">
        <p><?php echo substr($results['deskripsi'],0,70);?></p>
        </div>
      </div>
    </div>
      <?php }}?>
       
      </div>
    </div>
  </div>
</section>
<!--/Resent Cat --> 
<div class="footer2">
<!--Resent Cat -->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Pilih Motor Anda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

        <?php 
          $sql = "SELECT motor.*, merek2.* FROM motor, merek2 WHERE merek2.id_merek = motor.id_merek";
          $query = mysqli_query($koneksidb,$sql);
            if(mysqli_num_rows($query)>0)
            {
              while($results = mysqli_fetch_array($query))
            {

        ?>  

    <div class="col-list-3">
      <div class="recent-car-list">
        <div class="car-info-box"> <a href="vehical-details-motor.php?vhid=<?php echo htmlentities($results['id_motor']);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($results['image1']);?>" class="img-responsive" alt="image"></a>
          <ul>
            <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($results['bb']);?></li>
            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($results['tahun']);?> Model</li>
            <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($results['seating']);?> Seats</li>
          </ul>
        </div>
        <div class="car-title-m">
          <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($results['id_motor']);?>"><?php echo htmlentities($results['nama_merek']);?> , <?php echo htmlentities($results['nama_motor']);?></a></h6>
            <span class="price"><?php echo htmlentities(format_rupiah($results['harga']));?> /Hari</span> 
        </div>
        <div class="inventory_info_m">
          <p><?php echo substr($results['deskripsi'],0,70);?></p>
        </div>
      </div>
  </div>
    <?php }}?>
      </div>
    </div>
  </div>
</div>

</section>
<!--/Recent Cat -->

<?php  include('keunggulan.php');?>

<!--Faqs-->
<?php include('faqs.php');?>
<!--/Faqs-->

<?php include('contactus.php');?>

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>