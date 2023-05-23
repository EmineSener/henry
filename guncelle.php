<?php
require_once "config.php";
// guncelle veya sil butonuna basildiysa calisi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // silinecek/guncellenecek veriler
    $id= $_POST['id'];
    $urun= $_POST['urun'];
    $model= $_POST['model'];
    $kategori= $_POST['kategori'];
    $fiyat= $_POST['fiyat'];
    $stok= $_POST['stok']; 
    $img= $_POST['img'];
    // if(isset($_POST['id'])){
    //     echo"id var";
    //     echo $id ;
    // }
    // else{
    //     echo "yok";
    // }
    
    // sil butonuna tikalndiysa 
  if (isset($_POST["sil"])) {

    // silme sorguus
        
        $sql = "SELECT * FROM products WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // once silmek istenen ve onceki formdan cekilen id varligi kontrol
            $row = mysqli_fetch_assoc($result);

            // id var oldugu kesinlesince silme sorguus 
            $silme_sql = "DELETE FROM products WHERE id = '$id'";
            if (mysqli_query($conn, $silme_sql)) {
                
                 
            } else {
                echo "Silme işlemi sırasında bir hata oluştu: " . mysqli_error($conn);
            }
        } else {
            // ID bulunamadı
            echo "Belirtilen ID mevcut değil.";
        }

        // Veritabanı bağlantısını kapatma
        mysqli_close($conn);
        // silme islemi tamamlaninca yonetici ana sayfasina 
        header("Location: yonetici.php");
  }
  else{
    ?>

    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ürün Kayıt Formu</title>
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
              <form action="urunguncelle.php" method = "POST" class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün İsmi</label>
                  <input type="text" class="form-control" id="inputNanme4" name =" urun" value="<?php echo $urun ;?>">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Modeli</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="model" value="<?php echo $model ;?>">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Kategorisi</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="kategori" value="<?php echo $kategori ;?>">
                </div>
                <input type='hidden' name='id' value="<?php echo $id ;?>" >
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Fiyat</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="fiyat" value="<?php echo $fiyat ;?>">
                </div>


                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Stok</label>
                  <input type="text" class="form-control" id="inputNanme4" name ="stok" value="<?php echo $stok ;?>">
                </div>

                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Ürünün Url'i</label>
                  <input type="text" class="form-control" id="inputNanme4" name = "img" value="<?php echo $img ;?>">
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
?>
