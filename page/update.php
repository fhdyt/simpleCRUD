<?php include_once './config/database.php'; // KONEKSI DATABASE
$id = $_GET['id'];
////////////////////////////////////////////// PROSES SIMPAN //////////////////////////////////////////////

if(isset($_POST['btnSave'])) // JIKA BUTTON SIMPAN DIKLIK
{
    // AMBIL DATA PADA FORM
    $nama  = $_POST['nama'];
    $jk    = $_POST['jk'];
    $jk    = str_replace("'","&acute;",$jk);
    $tgl_lahir    = $_POST['tgl_lahir'];
    $tgl_lahir    = str_replace("'","&acute;",$tgl_lahir);
    // AMBIL DATA PADA FORM

    $query=mysqli_query($db, "UPDATE peserta SET nama='$nama', jenis_kelamin='$jk', tgl_lahir='$tgl_lahir' WHERE id='$id'") or die ("Gagal query".mysql_error()); // QUERY UPDATE
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
<?php
// AMBIL DATA BERDASARKAN ID 
$query = mysqli_query($db, "SELECT * FROM peserta WHERE id='$id' LIMIT 1");
$data =  mysqli_fetch_assoc($query);
// AMBIL DATA BERDASARKAN ID
?>

<!-- FORM DATA YANG AKAN DI SIMPAN -->
<form action="" method="post" name="frmadd" target="_self">
    <div class="form-group">
      <label>Nama</label>
      <input name="nama" class="form-control" type="text" placeholder="Nama Peserta" value='<?php echo $data['nama'] ?>' required>
    </div>
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select class="form-control" name="jk" id="exampleFormControlSelect1">
      <option value="L" <?php if($data['jenis_kelamin'] == "L") {echo "selected" ;} ?>>Laki</option>
      <option value="P" <?php if($data['jenis_kelamin'] == "P") {echo "selected" ;} ?>>Perempuan</option>
    </select>
    </div>
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input name="tgl_lahir" class="form-control" type="date" placeholder="Tanggal Lahir Peserta" value='<?php echo $data['tgl_lahir'] ?>' required>
    </div>
    <div class="form-group">
      <input type="submit" name="btnSave" value=" Simpan " style="cursor:pointer;" class="btn btn-success">
    </div>
</form>
<!-- FORM DATA YANG AKAN DI SIMPAN -->
