<!Doctype html>
<html>
 <head>
  <title>Form Entri Barang Baru</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
  <h2>Form Entri Barang Baru</h2>
  <form method="post">
  <div class="form-group">
   <label>Kode Barang</label>
   <input type="text" id="kodebarang" name="kodebarang"></div>
   <div class="form-group">
   <label>Nama Barang</label>
   <input type="text" id="namabarang" name="namabarang"></div>
   <div class="form-group">
   <label>Jumlah Stok</label>
   <input type="text" id="jumlah" name="jumlah"></div>
   <div class="form-group">
   <label>Satuan</label>
   <input type="text" id="satuan" name="satuan"></div>
   <div class="form-group">
   <label>Harga Satuan</label>
   <input type="number" id="hargasatuan" name="hargasatuan"></div>
   <div class="form-group">
   <label>Tanggal Pembelian</label>
   <input type="date" id="tanggalbeli" name="tanggalbeli" value="<?php echo date('Y-m-d');?>"></div>
   <div class="form-group">
   <label>Pilih Jenis Pembelian</label>
   <select id="jenispembelian" name="jenispembelian">
    <option value="tunai">Tunai</option>
	<option value="kredit">Kredit</option>
   </select></div>
   <div class="form-group">
   <label>Keterangan</label>
   <textarea id="keterangan" name="keterangan"></textarea></div>
   <input type="submit" name="bSimpan" value="Simpan Barang Baru" class="btn btn-primary">
  </form>
  </div>
 </body>
</html>
<?php 
if (isset($_POST['bSimpan'])) {
	$kodebarang=$_POST['kodebarang'];
	$namabarang=$_POST['namabarang'];
	$jumlah=$_POST['jumlah'];
	$satuan=$_POST['satuan'];
	$hargasatuan=$_POST['hargasatuan'];
	$tanggalbeli=$_POST['tanggalbeli'];
	$jenispembelian=$_POST['jenispembelian'];
	$keterangan=$_POST['keterangan'];
	$koneksi=new mysqli("localhost","root","","tokoemakkami");
	$sql="INSERT INTO `barang` (`kodebarang`, `namabarang`, `jumlah`, `satuan`, `hargasatuan`, `tanggalbeli`, `jenispembelian`, `keterangan`) VALUES ('".$kodebarang."', '".$namabarang."', '".$jumlah."', '".$satuan."', '".$jumlah."', '".$tanggalbeli."', '".$jenispembelian."', '".$keterangan."');";
	$q1=$koneksi->query($sql);
	if ($q1) {  //jika proses benar
	echo "Rekord barang sudah disimpan !";
} else { //jika proses salah
	echo "Rekord barang gagal disimpan !";
}
}	

?>