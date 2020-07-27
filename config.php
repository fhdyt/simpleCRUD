<?php
function tanggal($tanggal)
{
  $hari = date("d", strtotime($tanggal));
  $bulan = date("m", strtotime($tanggal));
  $tahun = date("Y", strtotime($tanggal));

  if ($bulan == "01")
  {
    $bulan_indonesia = "Januari";
  }
  else if($bulan == "02")
  {
    $bulan_indonesia = "Februari";
  }
  else if($bulan == "03")
  {
    $bulan_indonesia = "Maret";
  }
  else if($bulan == "04")
  {
    $bulan_indonesia = "April";
  }
  else if($bulan == "05")
  {
    $bulan_indonesia = "Mei";
  }
  else if($bulan == "06")
  {
    $bulan_indonesia = "Juni";
  }
  else if($bulan == "07")
  {
    $bulan_indonesia = "Juli";
  }
  else if($bulan == "08")
  {
    $bulan_indonesia = "Agustus";
  }
  else if($bulan == "09")
  {
    $bulan_indonesia = "September";
  }
  else if($bulan == "10")
  {
    $bulan_indonesia = "Oktober";
  }
  else if($bulan == "11")
  {
    $bulan_indonesia = "November";
  }
  else if($bulan == "12")
  {
    $bulan_indonesia = "Desember";
  }

  $date = $hari." ".$bulan_indonesia." ".$tahun;
  return $date;
}
 ?>
