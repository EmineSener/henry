
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ürün Kayıt</title>
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
              <h5 class="card-title">Ürün Kayıt Formu</h5>

              <!-- Vertical Form -->
              <form action="urunkaydet.php" method = "POST" class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün İsmi</label>
                  <input type="text" class="form-control" id="inputNanme4" name =" urun">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Modeli</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="model">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Kategorisi</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="kategori">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Fiyat</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="fiyat">
                </div>


                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Stok</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="stok">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Url'i</label>
                  <input type="text" class="form-control" id="inputNanme4" name = "img">
                </div>

                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
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