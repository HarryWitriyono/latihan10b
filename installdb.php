<?php 
$koneksi=new mysqli("localhost","root",""); //koneksi ke database
$sql1="create database tokoemakkami"; //variabel sql buat database
$q=$koneksi->query($sql1); //eksekusi sql buat database
if ($q) {  //jika proses benar
	echo "Database sudah dibuat !";
} else { //jika proses salah
	echo "Database gagal dibuat !";
}
//sql utk buat tabel barang
$sql2="CREATE TABLE tokoemakkami.`barang` (
  `kodebarang` varchar(30) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `jumlah` double(6,2) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `hargasatuan` double(10,0) DEFAULT NULL,
  `tanggalbeli` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$q1=$koneksi->query($sql2); //eksekusi query buat tabel barang
if ($q1) { //cek bila prosesnya berhasil
	echo "Tabel Barang sudah dibuat !";
} else { //cek bila prosesnya gagal.
	echo "Tabel Barang gagal dibuat !";
}
?>