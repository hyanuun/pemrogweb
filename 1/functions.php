<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'mahasiswa'); //mahasiswa disini itu nama database
}

function query($query)
{
  $konek = koneksi();

  $result = mysqli_query($konek, $query); //mahasiswa disini itu nama tabel

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
