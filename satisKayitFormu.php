<?php
require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // hangi urunu secti onceki scriptten bu bilgiyi alir
    $id= $_POST['id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Satış Kayıt Formu</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
<section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Satış Kaydı </h5>

              <!-- General Form Elements -->
              <form action="satisKaydet.php" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Müşteri İsmi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="isim">
                  </div>
                </div>
                <input type="hidden"  name="id" value="<?php echo $id ?>">
                

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Müşteri Tel</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tel">
                  </div>
                </div>
                    
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Tarih</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-2 col-form-label">Saat</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="time">
                  </div>
                </div>

                <div class="input-group mb-3">
                     <label class="col-sm-2 col-form-label">Fiyat</label>
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="fiyat">
                      <span class="input-group-text">.00</span>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Adet</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="adet">
                  </div>
                </div>

                <div class="input-group mb-3">
                     <label class="col-sm-2 col-form-label">Hasılat</label>
                      <span class="input-group-text">$</span>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="hasilat">
                      <span class="input-group-text">.00</span>
                </div>


                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
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

</body>

</html>