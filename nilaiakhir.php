<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nilai Akhir Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <br>
        <h3 class="text-center"><strong>Nilai Akhir Mahasiswa</strong></h3>
        <br>
        <form action="" method="POST" name="nilai">
        <div class="mb-3">
          <label form="Nama" class="form-label">Nama Mahasiswa</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label form="NilaiA" class="form-label">Nilai Absensi</label>
          <input type="text" class="form-control" id="nilai_a" name="nilai_a">
        </div>
        <div class="mb-3">
          <label form="NilaiT" class="form-label">Nilai Tugas</label>
          <input type="text" class="form-control" id="nilai_t" name="nilai_t">
        </div>
        <div class="mb-3">
          <label form="NilaiUTS" class="form-label">Nilai UTS</label>
          <input type="text" class="form-control" id="nilai_uts" name="nilai_uts">
        </div>
        <div class="mb-3">
          <label form="NilaiUAS" class="form-label">Nilai UAS</label>
          <input type="text" class="form-control" id="nilai_uas" name="nilai_uas">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <br><br>
      </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $namaa = $_POST ['nama'];
        $nilaia = $_POST ['nilai_a'];
        $nilait = $_POST ['nilai_t'];
        $nilaiuts = $_POST ['nilai_uts'];
        $nilaiuas = $_POST ['nilai_uas'];

        $absen2 = 0.2 * $nilaia;
        $nilait2 = 0.25 * $nilait;
        $nilaiuts2 = 0.2 * $nilaiuts;
        $nilaiuas2 = 0.35 * $nilaiuas;

        $nilaiakhir = $absen2 + $nilait2 + $nilaiuts2 + $nilaiuas2;

        echo "<div class='container'>";
        echo "<h3><strong>Nilai Akhir Mahasiswa</strong></h3><br>";
        echo "Nama        : $namaa<br>";
        echo "Nilai Absen : $nilaia x 20% : $absen2<br>";
        echo "Nilai Tugas : $nilait x 25% : $nilait2<br>";
        echo "Nilai UTS   : $nilaiuts x 20% : $nilaiuts2<br>";
        echo "Nilai UAS   : $nilaiuas x 35% : $nilaiuas2<br>";
        echo "<h4 class='text-md-start'>Nilai Akhir: $nilaiakhir</h4>";
        echo "</div>";
        
    }
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