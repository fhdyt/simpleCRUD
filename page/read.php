<?php
include_once './config/database.php'; // KONEKSI DATABASE
include_once './config.php';  ?>

<h1>Read</h1>
<hr>
<table class="table">
  <thead>
    <tr>
      <th>No.</th>
      <th>ID Peserta</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tanggal Lahir</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php
  ////////////////////////////////////////////// PROSES AMBIL DATA //////////////////////////////////////////////
  $query = mysqli_query($db, "SELECT * FROM peserta");
  while($data =  mysqli_fetch_assoc($query))
  {
  	$nomor++;
    if($data['jenis_kelamin'] == "L")
    {
      $jk = "Laki-Laki";
    }
    else
    {
      $jk = "Perempuan";
    }
  ?>
      <tr>
         <td> <?php echo $nomor; ?></td>
         <td><?php echo $data['id']; ?></td>
         <td><?php echo $data['nama']; ?></td>
         <td><?php echo $jk; ?></td>
         <td><?php
              echo tanggal($data['tgl_lahir']); ?>
         </td>
         <td>
            <a href="?page=Update&id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="?page=Delete&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
         </td>
      </tr>
    <?php
  }
  ////////////////////////////////////////////// PROSES AMBIL DATA //////////////////////////////////////////////
  ?>
   </tbody>
</table>
