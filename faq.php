<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">

<title>Car Rental | FAQS</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/black.css" title="black" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/logo-new.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/logo-new.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/logo-new.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/logo-new.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 

  <style>
    body {
 
      background-color: #fff;
      margin: 0;
      padding: 40px;
    }

    h1 {
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }

    p.subtitle {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }

    .faq-item {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      margin-bottom: 10px;
      border-radius: 6px;
      overflow: hidden;
    }

    .faq-question {
      padding: 20px;
      font-weight: bold;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .faq-answer {
      display: none;
      padding: 20px;
      border-top: 1px solid #ddd;
      background-color: #fff;
      color: #333;
    }

    .faq-item.active .faq-answer {
      display: block;
    }

    .arrow {
      transition: transform 0.3s ease;
    }

    .faq-item.active .arrow {
      transform: rotate(180deg);
    }
  </style>
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>FAQS</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>FAQS</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>

<section class="faq_category">

  <h1>Pertanyaan yang Sering Diajukan (FAQ)</h1>
  <p class="subtitle">Bagaimana kami dapat membantu Anda?</p>



  <div class="faq-container">
    <div class="faq-item">
      <div class="faq-question">
        Apa saja fasilitas yang CAR RENTAL berikan kepada penyewa?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Kami menyediakan layanan antar-jemput, kendaraan bersih dan terawat, layanan pelanggan 24/7, dan asuransi kendaraan.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        “Bisa minta pricelist sewa” atau “harga sewanya berapa”?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Untuk pricelist lengkap, silakan hubungi kami melalui WhatsApp atau email resmi kami.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Apakah bisa mobil premium disewa dengan jangka waktu di bawah satu tahun (di atas 3 bulan)?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Ya, mobil premium dapat disewa dengan durasi fleksibel mulai dari 3 bulan hingga satu tahun.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Apakah bisa menyewa kendaraan untuk pribadi tapi dengan masa sewa di atas 1 tahun?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Tentu, kami melayani penyewaan jangka panjang untuk keperluan pribadi maupun korporat.
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">
        Bagaimana cara menyewa di Car Rental?
        <span class="arrow">&#9650;</span>
      </div>
      <div class="faq-answer">
        Pertama anda harus mendaftar terlebih dahulu sebagai user melalui menu yang telah disediakan.
      </div>
    </div>
  </div>

</section>

  <script>
    const questions = document.querySelectorAll('.faq-question');
    questions.forEach(q => {
      q.addEventListener('click', () => {
        const item = q.parentElement;
        item.classList.toggle('active');
      });
    });
  </script>

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
</html>
