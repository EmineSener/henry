<?php
require_once "config.php";

// En çok satış yapan kullanıcıyı bulma sorgusu 
$sql1 = "SELECT employee_id, COUNT(*) as hasilat FROM satis GROUP BY employee_id ORDER BY hasilat DESC LIMIT 1";
$result1 = $conn->query($sql1);
session_start();
if ($result1->num_rows > 0) {
    // En çok satış yapan kullanıcı bilgilerri
    $row = $result1->fetch_assoc();
    $kullanici_id = $row['employee_id'];
    $satis_sayisi = $row['hasilat'];

   
    

    $sql = "SELECT * FROM users WHERE id='$kullanici_id'";

    //sorguyu gönder
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
    //    bilgileri alttaki html de scriptler halinda kullanacagiz
        // $img =  $gelen['img'];
        $name =$gelen['name'];
        $surname =$gelen['surname'];
        $email =$gelen['email'];
        $tel =$gelen['tel'];
        $type = $gelen['type'];
        $img = $gelen['img'];
        $adres = $gelen['adres'];
        $job = $gelen['job'];
        $country = $gelen['country'];
        $sube = $gelen['sube'];
        
    ?>
        
        
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Satış Analizi</title>
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

        


        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src=<?php echo $img;?> alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['user']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $name?></h6>
              <span><?php echo $type?></span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  



    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><?php echo $_SESSION['user']?></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src=<?php echo $img;?> alt="Profile" class="rounded-circle">
              <h2><?php echo $name?></h2>
              <h3><?php echo $type?></h3>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Yapılan analiz sonucu en çok satış yapan çalışanımız.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $name;?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Surname</div>
                    <div class="col-lg-9 col-md-8"><?php echo $surname; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Şube</div>
                    <div class="col-lg-9 col-md-8"><?php echo $sube; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?php echo $job; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo $country; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Adres</div>
                    <div class="col-lg-9 col-md-8"><?php echo $adres; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $tel; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $email; ?></div>
                  </div>

                </div>

                

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  

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

</body>

</html>

    <?php
    }

                    
                    
}

// bu kod ise en cok satis yapan urunu sorgular 
$sql5 = "SELECT urun_id, COUNT(*) as adet FROM satis GROUP BY urun_id ORDER BY adet DESC LIMIT 1";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
    // En çok satan urun
    $row = $result5->fetch_assoc();
    $urun_id = $row['urun_id'];
    $satis_mik = $row['adet'];
    
    //belirlenen urunun bilgilerini cek 
    $sql6 = "SELECT * FROM products WHERE id='$urun_id'";

    //sorguyu veritabanina gönderiyoruz.
    $cevap = mysqli_query($conn,$sql6);

    //eger cevap FALSE ise hata yazdiriyoruz.      
    if(!$cevap )
    {
        echo '<br>Hata:' . mysqli_error($baglanti);
    }
    $i = 0;
    $data = array();
    while($gelen=mysqli_fetch_array($cevap))
    {   
    //    bu bilgiler script ler halind ealttaki html formda kullanilacak
        // $img =  $gelen['img'];
        $urun =$gelen['urun'];
        $model =$gelen['model'];
        $kategori =$gelen['kategori'];
        $img =$gelen['img'];
        
    }

    

?>

<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src=<?php echo $img?> alt="Profile" class="rounded-circle">
              <h2><?php echo $urun?></h2>
              <h3><?php echo $model?></h3>
              
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Yapılan analiz sonucu en çok satılan yapan ürünümüz.</p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Ürün</div>
                    <div class="col-lg-9 col-md-8"><?php echo $urun?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Model</div>
                    <div class="col-lg-9 col-md-8"><?php echo $model?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Kategori</div>
                    <div class="col-lg-9 col-md-8"><?php echo $kategori?></div>
                  </div>

                  

                </div>

                

            </div>
          </div>

        </div>
      </div>
    </section>

   



<?php
    


}


// Veritabanı bağlantısını kapatma
$conn->close();
?>
