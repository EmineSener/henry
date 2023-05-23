<?php
    require_once "config.php";

  // en yeni 3 basariyi ceken sorgu
    $sql ="SELECT * FROM succes ORDER BY tarih DESC LIMIT 3";

    //sorguyu veritabanina gönderiyoruz.
    $cevap = mysqli_query($conn,$sql);

    //eger cevap FALSE ise hata yazdiriyoruz.      
    if(!$cevap )
    {
        echo '<br>Hata:' . mysqli_error($baglanti);
    }
    $i = 0;
    // bu data ile scriptler halind eyazar
    $data = array();
    while($gelen=mysqli_fetch_array($cevap))
    {   
        
        $data[$i++] =  $gelen['img'];
        
        $data[$i++] =  $gelen['info'];
        
      
    }

    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yönetici</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- bootstrap 1 -->
    <!-- Favicons -->
    <link href="assets1/img/favicon.png" rel="icon">
    <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">


  <!-- Favicons -->
  <link href="assets2/img/favicon.png" rel="icon">
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets2/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets2/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets2/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">Henry</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="index.php" style="color:black">Ana Sayfa</a></li>
            
            <li><a class="nav-link scrollto" href="urunKayit.php" style="color:black">Ürün Kaydı Gir</a></li>
            <li><a class="nav-link scrollto" href="urunList.php" style="color:black">Ürünleri Listele</a></li>
            <li><a class="nav-link scrollto" href="satisList.php" style="color:black">Satışları Listele</a></li>
            <li><a class="nav-link scrollto" href="satisAnaliz.php" style="color:black">Satış Analizi Yap </a></li>
            <li><a class="nav-link scrollto" href="oturumuSonlandir.php" style="color:black">Çıkış Yap </a></li>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

           
</header>
        
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Henry</h5>

              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img height ="50%" src=<?php echo $data[0] ?> class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Başarılarımız</h5>
                      <p><?php echo $data[1] ?></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img  height ="50%" src=<?php echo $data[2] ?> class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Başarılarımız</h5>
                      <p><?php echo $data[3] ?></p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img height ="50%" src=<?php echo $data[4] ?> class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Başarılarımız</h5>
                      <p><?php echo $data[5] ?></p>
                    </div>
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with captions -->

            </div>
          </div>

        </div>
      </div>
    </section>
          



  <!-- Vendor JS Files -->
  <script src="assets2/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/vendor/chart.js/chart.umd.js"></script>
  <script src="assets2/vendor/echarts/echarts.min.js"></script>
  <script src="assets2/vendor/quill/quill.min.js"></script>
  <script src="assets2/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets2/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets2/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

      <!-- Vendor JS Files -->
  <script src="assets1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>