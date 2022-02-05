<?php
$conn = mysqli_connect('localhost', 'root', '', 'unegodb');
//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //mengambil elemen data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  $foto = htmlspecialchars($data['foto']);

  $query = "INSERT INTO barang VALUES (null,'$nama','$harga','$stok','$foto');";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM barang WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $harga = htmlspecialchars($data['harga']);
  $stok = htmlspecialchars($data['stok']);
  $foto = htmlspecialchars($data['foto']);

  $query = "UPDATE barang SET nama='$nama',harga='$harga',stok= '$stok',foto='$foto' WHERE id= $id; ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;
  $query = "SELECT * FROM barang WHERE nama LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
