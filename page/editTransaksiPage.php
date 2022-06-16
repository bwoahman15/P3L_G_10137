<?php
 include '../component/sidebarCustomer.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Edit Transaksi</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >Edit Transaksi</h4>
    <hr>
    <form action="../process/editTransaksiProcess.php?id=<? echo $data[0] ?>" method="post">


    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Customer</label>

    <select class="form-select" aria-label="Default select example" name="id_customer" id="id_customer" required>
      <?php
          include('../db.php');

          $id_customer=$_GET['id_customer'];
          $customers = mysqli_query($con, "SELECT id_customer, nama_customer from customer WHERE id_customer = '$id_customer'") or die(mysqli_error($con));
          $fetchcustomerstemp = mysqli_fetch_array($customers);

          echo '<option value="'.$fetchcustomerstemp[0].'" selected hidden>'.$fetchcustomerstemp[0].' - '.$fetchcustomerstemp[1].'</option>';
          
      ?>
    </select>
    </div>

<?php
    $id_driver_lama = $_GET['id_driver'];
?>
<input type="hidden" name="id_driver_lama" value="<?php echo $id_driver_lama; ?>" >

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Driver</label>

    <select class="form-select" aria-label="Default select example" name="id_driver" id="id_driver" required>
        <?php
            include('../db.php');

            $id_driver=$_GET['id_driver'];
            $drivers = mysqli_query($con, "SELECT id_driver, nama_driver from driver") or die(mysqli_error($con));
            $driverstemp = mysqli_query($con, "SELECT id_driver, nama_driver from driver WHERE id_driver = '$id_driver'") or die(mysqli_error($con));
            $fetchdriverstemp = mysqli_fetch_array($driverstemp);

            echo '<option value="'.$fetchdriverstemp[0].'" selected hidden>'.$fetchdriverstemp[0].' - '.$fetchdriverstemp[1].'</option>';

            while($querydriver = mysqli_fetch_array($drivers)) {
                echo '<option value="'.$querydriver[0].'">'.$querydriver[0].' - '.$querydriver[1].'</option>';
            }
        ?>
    </select>
</div>

<?php
    $id_kendaraan_lama = $_GET['id_kendaraan'];
?>
<input type="hidden" name="id_kendaraan_lama" value="<?php echo $id_kendaraan_lama; ?>" >

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Kendaraan</label>

    <select class="form-select" aria-label="Default select example" name="id_kendaraan" id="id_kendaraan" required>
        <?php
            include('../db.php');

            $id_kendaraan=$_GET['id_kendaraan'];
            $kendaraans = mysqli_query($con, "SELECT id_kendaraan, nama_kendaraan from kendaraan") or die(mysqli_error($con));
            $kendaraanstemp = mysqli_query($con, "SELECT id_kendaraan, nama_kendaraan from kendaraan WHERE id_kendaraan = '$id_kendaraan'") or die(mysqli_error($con));
            $fetchkendaraanstemp = mysqli_fetch_array($kendaraanstemp);

            echo '<option value="'.$fetchkendaraanstemp[0].'" selected hidden>'.$fetchkendaraanstemp[0].' - '.$fetchkendaraanstemp[1].'</option>';

            while($querykendaraan = mysqli_fetch_array($kendaraans)) {
                echo '<option value="'.$querykendaraan[0].'">'.$querykendaraan[0].' - '.$querykendaraan[1].'</option>';
            }
        ?>
    </select>
</div>

<?php
    $id_promo_lama = $_GET['id_promo'];
?>
<input type="hidden" name="id_promo_lama" value="<?php echo $id_promo_lama; ?>" >

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Promo</label>

    <select class="form-select" aria-label="Default select example" name="id_promo" id="id_promo" required>
        <?php
            include('../db.php');

            $id_promo=$_GET['id_promo'];
            $promos = mysqli_query($con, "SELECT id_promo, kode_promo from promo") or die(mysqli_error($con));
            $promostemp = mysqli_query($con, "SELECT id_promo, kode_promo from promo WHERE id_promo = '$id_promo'") or die(mysqli_error($con));
            $fetchpromostemp = mysqli_fetch_array($promostemp);

            echo '<option value="'.$fetchpromostemp[0].'" selected hidden>'.$fetchpromostemp[0].' - '.$fetchpromostemp[1].'</option>';

            while($querypromo = mysqli_fetch_array($promos)) {
                echo '<option value="'.$querypromo[0].'">'.$querypromo[0].' - '.$querypromo[1].'</option>';
            }
        ?>
    </select>
</div>

<?php
    $id_pegawai_lama = $_GET['id_pegawai'];
?>
<input type="hidden" name="id_pegawai_lama" value="<?php echo $id_pegawai_lama; ?>" >

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>

    <select class="form-select" aria-label="Default select example" name="id_pegawai" id="id_pegawai" required>
        <?php
            include('../db.php');

            $id_pegawai=$_GET['id_pegawai'];
            $metodes = mysqli_query($con, "SELECT id_pegawai, nama_pegawai from pegawai") or die(mysqli_error($con));
            $metodestemp = mysqli_query($con, "SELECT id_pegawai, nama_pegawai from pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));
            $fetchmetodestemp = mysqli_fetch_array($metodestemp);

            echo '<option value="'.$fetchmetodestemp[0].'" selected hidden>'.$fetchmetodestemp[0].' - '.$fetchmetodestemp[1].'</option>';

            while($querymetode = mysqli_fetch_array($metodes)) {
                echo '<option value="'.$querymetode[0].'">'.$querymetode[0].' - '.$querymetode[1].'</option>';
            }
        ?>
    </select>
</div>


<?php
    $metode_pembayaran_lama = $_GET['metode_pembayaran'];
?>
<input type="hidden" name="metode_pembayaran_lama" value="<?php echo $metode_pembayaran_lama; ?>" >
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>

    <select class="form-select" aria-label="Default select example" name="metode_pembayaran" id="metode_pembayaran" required>
        <?php
            include('../db.php');

            $metode_pembayaran=$_GET['metode_pembayaran'];
            $pegawais = mysqli_query($con, "SELECT metode_pembayaran from transaksi") or die(mysqli_error($con));
            $pegawaistemp = mysqli_query($con, "SELECT metode_pembayaran from transaksi  WHERE metode_pembayaran = '$metode_pembayaran'") or die(mysqli_error($con));
            $fetchpegawaistemp = mysqli_fetch_array($pegawaistemp);

            echo '<option value="'.$fetchpegawaistemp[0].'" selected hidden>'.$fetchpegawaistemp[0].'</option>';

            while($querypegawai = mysqli_fetch_array($pegawais)) {
                echo '<option value="'.$querypegawai[0].'">'.$querypegawai[0].'</option>';
            }
        ?>
    </select>
</div>

          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editTransaksi">Edit Transaksi</button>
        </div>
        <br>
    
 </form>
 </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>