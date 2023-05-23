

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Satış Listesi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <style>
        /* Stil ayarları */
        #container {
            height: 100%;
            width: 100%;
            overflow: auto;
        }
    </style>

    <script>
        function gonder(id){

        }
    </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">Henry</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
    </nav>
    </header>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-4">
          <div class="row">


            <!-- Top Selling -->
            <div class="col-12" id="container" style="position:absolute;left:0px;width:100%">
              <div class="card top-selling overflow-auto">

              <div class="datatable-top">

              </div>
            

                <div class="card-body pb-0">
                  <h5 class="card-title">Ürün Kayıt Listesi</h5>

                  <table class="table table-borderless" style="height:100%" >
                    <thead>
                      <tr>
                        
                        <th scope="col">Urun</th>
                        <th scope="col">Çalışan</th>
                        <th scope="col">Müşteri</th>
                        <th scope="col">Telefon</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Saat</th>
                        <th scope="col">Fiyat</th>
                        <th scope="col">Adet</th>
                        <th scope="col">Hasılat</th>
                      </tr>
                    </thead>



                    <tbody>

                    <?php
                    require_once "config.php";

                    // satis tablosuna kayitli tum satlai cekrr
                    $sql = "SELECT * FROM satis";
                    
                    //sorgu veritabanı
                    $cevap = mysqli_query($conn,$sql);

                    //kontrol   
                    if(!$cevap )
                    {
                        echo '<br>Hata:' . mysqli_error($baglanti);
                    }
                    $i = 0;
                    $data = array();
                    while($gelen=mysqli_fetch_array($cevap))
                    {   
                    //  urunun rresmini ariyorum
                       $id = $gelen['urun_id'];
                       $sql3 = "SELECT img FROM products WHERE id = $id";
                       $q3 = mysqli_query($conn, $sql3);
                       $row = mysqli_fetch_assoc($q3);
                       $img = $row['img'];
                        
                    //    hangi calisan islem yapiyor
                       $calisan = $gelen['employee_id'];
                       $sql4 = "SELECT name FROM users WHERE id = $calisan";
                       $q4 = mysqli_query($conn, $sql4);
                       $row = mysqli_fetch_assoc($q4);
                       $name = $row['name'];


                        
                        echo "<tr><th scope='row'><a href='#'><img src=$img alt=''></a></th>";
                        // echo "<td>".$gelen['urun_id']."</td>";
                        echo "<td>".$name."</td>";
                        echo "<td>".$gelen['isim']."</td>";
                        echo "<td>".$gelen['tel']."</td>";
                        echo "<td>".$gelen['date']."</td>";
                        echo "<td>".$gelen['time']."</td>";
                        echo "<td>".$gelen['fiyat']."</td>";
                        echo "<td>".$gelen['adet']."</td>";
                        echo "<td>".$gelen['hasilat']."</td>";     
                    }

                    
                    ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

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
  <script>
   
</script>
  <!-- Template Main JS File -->
  <script src="assets2/js/main.js"></script>

</body>

</html>