<h1>Dasar-Dasar PHP</h1>
<hr>

<h3><b>Memulai PHP</b></h3>
<div class="card">
  <div class="card-body">
  <?php
  $code1 = "<?php
  // Kode PHP disini
?>";
  highlight_string($code1);
   ?>
  </div>
</div>
<hr>
<br>
<br>
<!-- --------------------------------------------------------- -->

<h3><b>Menampilkan PHP</b></h3>
<div class="card">
  <div class="card-body">
  <?php
  $code1 = '<?php
  echo "<h2>Hellow world!</h2>";
  echo "Hello world!<br>";
  print "<h2>Hellow world!</h2>";
  print "Hello world!<br>";
?>';
  highlight_string($code1);
   ?>
  </div>
</div>
<hr>
<br>
<br>
<!-- --------------------------------------------------------- -->

<h3><b>Variable PHP</b></h3>
<div class="card">
  <div class="card-body">
  <?php
  $code1 = '<?php
  $x = "Hello world!";
  echo $x;
?>';
  highlight_string($code1);
   ?>
  </div>
</div>
<hr>
<br>
<br>
<!-- --------------------------------------------------------- -->

<h3><b>Operator PHP</b></h3>
<table class="table">
  <tr>
    <td>+</td>
    <td>Penjumlahan</td>
  </tr>
  <tr>
    <td>-</td>
    <td>Pengurangan</td>
  </tr>
  <tr>
    <td>*</td>
    <td>Pengalian</td>
  </tr>
  <tr>
    <td>/</td>
    <td>Pembagian</td>
  </tr>
</table>
<div class="card">
  <div class="card-body">
  <?php
  $code1 = '<?php
  $x = 5;
  $y = 10;
  $result = $x + $y;
  echo $result;
?>';
  highlight_string($code1);
   ?>
  </div>
</div>
<hr>
<br>
<br>
<!-- --------------------------------------------------------- -->

<h3><b>Kondisi PHP</b></h3>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <h6 class="card-header">Kondisi</h6>
      <div class="card-body">
      <?php
      $code1 = '<?php
      $nilai = 92;
      if ($nilai > 65 ) {
          $keterangan = "LULUS";
        }
        else {
          $keterangan = "TIDAK LULUS";
        }

      echo $keterangan;
?>';
      highlight_string($code1);
       ?>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <h6 class="card-header">Kondisi Percabangan</h6>
      <div class="card-body">
      <?php
      $code1 = '<?php
      $nilai = 92;
      if ($nilai >= 90 ) {
          $grade = "A";
        }
        else if ($nilai >= 80 && $nilai < 90) {
          $grade = "B";
        }
        else if ($nilai >= 60 && $nilai < 80) {
          $grade = "C";
        }
        else if ($nilai >= 40 && $nilai < 60) {
          $grade = "D";
        }
        else if ($nilai < 40) {
          $grade = "E";
        }
        else {
          $grade = "Error";
        }

      echo $grade;
?>';
      highlight_string($code1);
       ?>
      </div>
    </div>
  </div>
</div>
<hr>
<br>
<br>

<!-- --------------------------------------------------------- -->

<h3><b>Lopping PHP</b></h3>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <h6 class="card-header">While Loop</h6>
      <div class="card-body">
      <?php
      $code1 = '<?php
      $x = 1;
      while($x <= 5)
      {
        echo "Nomor: $x <br>";
        $x++;
      }
?>';
      highlight_string($code1);
       ?>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <h6 class="card-header">For Loop</h6>
      <div class="card-body">
      <?php
      $code1 = '<?php
      for ($x = 0; $x <= 10; $x++)
      {
        echo "Nomor: $x <br>";
      }
?>';
      highlight_string($code1);
       ?>
      </div>
    </div>
  </div>
</div>
<hr>
<br>
<br>
<!-- --------------------------------------------------------- -->
