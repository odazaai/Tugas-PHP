<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gaji Pegawai</title>
  </head>
  <body>
    <div class="container">
        <br>
        <h2 class="text-center">GAJI PEGAWAI</h2>
        <br>

        <form action="" method="POST" name="gaji">
        <div class="mb-3">
          <label form="golongan" class="form-label">Golongan</label>
          <input type="text" class="form-control" id="gol" name="gol">
        </div>
        <div class="mb-3">
          <label form="JumlahAnak" class="form-label">Jumlah Anak</label>
          <input type="text" class="form-control" id="jmla" name="jmla">
        </div>
        <div class="mb-3">
          <label form="JumlahJamLembur" class="form-label">Jumlah Jam Lembur</label>
          <input type="text" class="form-control" id="jjl" name="jjl">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
    <br><br>

    <?php
        if(isset($_POST['submit'])) {
            $golongan = $_POST ['gol'];
            $jml_anak = $_POST ['jmla'];
            $jml_lmbur = $_POST ['jjl'];

            if($golongan == 1){
                $gajipokok = 1700000;
                $tunjanganistri = 300000;
                $tunjangananak = 100000;
                $lembur = 50000;
            } else if ($golongan == 2){
                $gajipokok = 2000000;
                $tunjanganistri = 500000;
                $tunjangananak = 150000;
                $lembur = 75000;
            } else if ($golongan == 3){
                $gajipokok = 2500000;
                $tunjanganistri = 750000;
                $tunjangananak = 200000;
                $lembur = 100000;
            }

            $gajikotor = $gajipokok + $tunjanganistri + ($tunjangananak * $jml_anak) + ($lembur * $jml_lmbur);
            $pajak = $gajikotor * 0.05;
            $gajibersih = $gajikotor - 100000 - $pajak;
          
    ?>

    <div class="container">
    <div class="card" style="width: 25 rem">
    <div class="card-body">
      <p>=================================================</p>
      <p>Golongan : <?php echo $golongan?></p>
      <p>Gaji Pokok : <?php echo $gajipokok?></p>
      <p>Tunjangan Istri : <?php echo $tunjanganistri?></p>
      <p>Jumlah Anak : <?php echo $jml_anak?></p>
      <p>Tunjangan Anak : <?php echo $tunjangananak?></p>
      <p>Jumlah Jam Lmebur : <?php echo $jml_lmbur?></p>
      <p>Lembur : <?php echo $lembur?></p>
      <p>-------------------------------------------------</p>
      <p>Gaji Kotor : <?php echo $gajikotor?></p>
      <p>-------------------------------------------------</p>
      <p>Potongan</p>
      <p>a. BPJS : Rp. 100000</p>
      <p>b. Pajak : Rp. <?php echo $pajak?></p>
      <p>=================================================</p>
      <p>Total Gaji : Rp. <?php echo $gajibersih?></p>
      <p>=================================================</p>
    </div>
    </div>
    </div>
    <?php }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>