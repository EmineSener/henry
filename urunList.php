

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ürün Listesi </title>
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
        <img src="assets/img/logo.png" alt="">
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
                        
                        <th scope="col">Ürün Resmi</th>
                        <th scope="col">Ürün</th>
                        <th scope="col">Ürün Modeli</th>
                        <th scope="col">Ürün Kategorisi</th>
                        <th scope="col">Ürün Fiyatı</th>
                        <th scope="col">Ürün Stok</th>
                      </tr>
                    </thead>



                    <tbody>

                    <?php
                    require_once "config.php";

                    // tum urunleri veritaban,ndn cekiyoruz
                    $sql = "SELECT * FROM products";

                    //sorguyu veritabanina gönderiyoruz.
                    $cevap = mysqli_query($conn,$sql);

                    //eger cevap FALSE ise hata yazdiriyoruz.      
                    if(!$cevap )
                    {
                        echo '<br>Hata:' . mysqli_error($baglanti);
                    }
                    $i = 0;
                    $data = array();
                    while($gelen=mysqli_fetch_array($cevap))
                    {   
                        // her bir satirin blgilerini tek tek ele alip echo ile html e yazdiriyoruz
                        $img =  $gelen['img'];
                        $id =$gelen['id'];
                        $urun =$gelen['urun'];
                        $model =$gelen['model'];
                        $kategori =$gelen['kategori'];
                        $fiyat =$gelen['fiyat'];
                        $stok =$gelen['stok'];
                        echo "<form action='guncelle.php' method='POST'>";
                        
                        
                        echo "<tr><th scope='row'><a href='#'><img src=$img alt=''></a></th>";
                        echo "<td>".$gelen['urun']."</td>";
                        echo "<td>".$gelen['model']."</td>";
                        echo "<td>".$gelen['kategori']."</td>";
                        echo "<td>".$gelen['fiyat']."</td>";
                        echo "<td>".$gelen['stok']."</td>";
                        echo "<td><input type='hidden' name='id' value='$id' ><td>";
                        echo "<td><input type='hidden' name='urun' value=$urun ><td>";
                        echo "<td><input type='hidden' name='model' value=$model ><td>";
                        echo "<td><input type='hidden' name='kategori' value=$kategori ><td>";
                        echo "<td><input type='hidden' name='fiyat' value='$fiyat' ><td>";
                        echo "<td><input type='hidden' name='stok' value='$stok' ><td>";
                        echo "<td><input type='hidden' name='img' value=$img ><td>";
                        echo "<td><button  type='submit' class='btn btn-primary rounded-pill' name='sil'>Ürünü Sil</button></td>";
                        echo "<td><button type='submit' class='btn btn-success rounded-pill' name='guncelle'>Ürünü Güncelle</button></td></form></tr>";
                        echo "</form>";
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