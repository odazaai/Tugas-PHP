<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Supermarket</title>
  </head>
  <body>

  <div class="container">
      <br><br>
      <h3><strong><center>BIG SUPER</center></strong></h3>
      <p><center>Menjual barang-barang keperluan sehari-hari.</center></p>
      <br>

      <form action="" method="POST" name="supermarket">
        <div class="mb-3">
          <label form="NamaBarang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="nama_brg" name="nama_brg">
        </div>
        <div class="mb-3">
          <label form="HargaBarang" class="form-label">Harga Barang</label>
          <input type="text" class="form-control" id="hrg_brg" name="hrg_brg">
        </div>
        <div class="mb-3">
          <label form="JumlahBarang" class="form-label">Jumlah Barang</label>
          <input type="text" class="form-control" id="jml_brg" name="jml_brg">
        </div>
        <div class="mb-3">
          <label form="uang" class="form-label">Uang yang dimiliki</label>
          <input type="text" class="form-control" id="uang" name="uang">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
  </div>

  <?php
if(isset($_POST['submit'])){
    $nama_brg = $_POST ['nama_brg'];
    $harga = $_POST ['hrg_brg'];
    $jumlah = $_POST ['jml_brg'];
    $uangg = $_POST ['uang'];

    echo "<div class='container'>";
    echo "<hr><h3 class='text-md-start'>Total Bayar</h3>";

    // harga barang 
    $hargabarang = $harga * $jumlah;

    //menghitung pajak
    $pajak = $hargabarang * 0.1;

    //menghitung diskon
    $diskon = $hargabarang * 0.2;

    $total = $hargabarang - $diskon + $pajak;
    $kembalian = $uangg - $total;

    echo "Nama Barang: $nama_brg <br>";
    echo "Harga Barang : $harga <br>";
    echo "Jumlah Barang : $jumlah <br>";
    echo "Diskon 20% : $diskon <br>";
    echo "Pajak yang harus dibayar sebesar 10% : $pajak <br>";
    echo "Uang yang dimiliki : $uangg <br>";
    echo "<h3 class='text-md-start'>Rp. $total</h3>";
    echo "<h3 class='text-md-start'>Kembalian Rp. $kembalian</h3>";
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