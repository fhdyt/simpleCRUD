<?php include_once './config/database.php'; // KONEKSI DATABASE

////////////////////////////////////////////// PROSES SIMPAN //////////////////////////////////////////////

if(isset($_POST['btnSave'])) // JIKA BUTTON SIMPAN DIKLIK
{
    // AMBIL DATA PADA FORM
    $nama  = $_POST['nama'];
    $jk    = $_POST['jk'];
    $tgl_lahir    = $_POST['tgl_lahir'];
    // AMBIL DATA PADA FORM

    $query=mysqli_query($db, "INSERT INTO peserta SET nama='$nama', jenis_kelamin='$jk', tgl_lahir='$tgl_lahir'") or die ("Gagal query".mysql_error()); // QUERY SIMPAN
    if($query) // JIKA QUERY BERJALAN
    {
        echo "<h1>Berhasil Disimpan</h1>";
    }
    exit; // SELESAI
}

////////////////////////////////////////////// PROSES SIMPAN //////////////////////////////////////////////
?>


<h1>Create</h1>
<hr>
<!-- FORM DATA YANG AKAN DI SIMPAN -->
<form action="" method="post" name="frmadd" target="_self">
    <div class="form-group">
      <label>Nama</label>
      <input name="nama" class="form-control" type="text" placeholder="Nama Peserta" required>
    </div>
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="jk" id="exampleFormControlSelect1">
      <option value="L">Laki</option>
      <option value="P">Perempuan</option>
    </select>
    </div>
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input name="tgl_lahir" class="form-control" type="date" placeholder="Tanggal Lahir Peserta" required>
    </div>
    <div class="form-group">
      <input type="submit" name="btnSave" value=" Simpan " style="cursor:pointer;" class="btn btn-success">
    </div>
</form>
<!-- FORM DATA YANG AKAN DI SIMPAN -->
