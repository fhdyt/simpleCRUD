<?php
include_once './config/database.php'; // KONEKSI DATABASE

    if(empty($_GET['id'])) // JIKA ID KOSONG
    {
      echo "<h1>Data yang dihapus tidak ada</h1>";
    }
    else
    {
      $query=mysqli_query ($db, "DELETE FROM peserta WHERE id='".$_GET['id']."'") or die ("Error hapus data".mysql_error()); // QUERY HAPUS
      if($query) // JIKA QUERY BERJALAN
      {
        echo "<h1>Berhasil dihapus</h1>";
      }
    }
?>
