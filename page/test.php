<h1>Test</h1>
<hr>
<?php
      for ($x = 0; $x <= 10; $x++)
      {
        echo "Nomor: $x <br>";
      }

      $barang = ["Buku Tulis", "Penghapus", "Spidol"];

      for($x=0; $x < count($barang); $x++){
          echo $barang[$x]."<br>";
      }
?>
