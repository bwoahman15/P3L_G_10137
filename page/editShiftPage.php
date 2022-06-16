<?php
 include '../component/sidebarAdmin.php';
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
    <title>Edit Shift</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >Edit Shift</h4>
    <hr>
    <form action="../process/editShiftProcess.php" method="post">


   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pilih Pegawai</label>

    <select class="form-select" aria-label="Default select example" name="id_pegawai" id="id_pegawai" required>
      <?php
          include('../db.php');

          $id_pegawai=$_GET['id_pegawai'];
          $pegawais = mysqli_query($con, "SELECT * from pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));
          $fetchpegawaistemp = mysqli_fetch_array($pegawais);

          echo '<option value="'.$fetchpegawaistemp[0].'" selected hidden>'.$fetchpegawaistemp[0].' - '.$fetchpegawaistemp[1].'  '.$fetchpegawaistemp[2].'</option>';
          
      ?>
    </select>
    </div>

<?php
    $id_shift_lama = $_GET['id_shift'];
?>
<input type="hidden" name="id_shift_lama" value="<?php echo $id_shift_lama; ?>" >

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pilih Jadwal</label>

    <select class="form-select" aria-label="Default select example" name="id_shift" id="id_shift" required>
        <?php
            include('../db.php');

            $id_shift=$_GET['id_shift'];
            $shifts = mysqli_query($con, "SELECT * from shift") or die(mysqli_error($con));
            $shiftstemp = mysqli_query($con, "SELECT * from shift WHERE id_shift = '$id_shift'") or die(mysqli_error($con));
            $fetchshiftstemp = mysqli_fetch_array($shiftstemp);

            echo '<option value="'.$fetchshiftstemp[0].'" selected hidden>'.$fetchshiftstemp[0].' '.$fetchshiftstemp[1].' - '.$fetchshiftstemp[2].' - '.$fetchshiftstemp[3].'</option>';

            while($queryshift = mysqli_fetch_array($shifts)) {
                echo '<option value="'.$queryshift[0].'">'.$queryshift[0].' - '.$queryshift[1].' -'.$queryshift[2].' - '.$queryshift[3].'</option>';
            }
        ?>
    </select>
</div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editShift">Edit Shift</button>
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