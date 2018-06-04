<?php
$db =  new mysqli("localhost","root","","vegashotel");?>
<html>
<head><title>Vegas Hotel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<?php
	function total(){
		$sql = "SELECT * FROM kamar";
		require('koneksi.php');
		$hasil = $koneksi->query("SELECT Harga FROM kamar where Nama_Kamar='VVIP'");
			while ($mem = mysqli_fetch_assoc($hasil)):
			echo " ".$mem['Harga']."";
			endwhile;
		echo "<br>";
	}
	?>
	&nbsp;
	<div class="table-responsive">
	<table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th colspan="2"><center>NOTA PEMBAYARAN</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nama Pemesan</td>
		<td><?php require('koneksi.php');
			$hasil = $koneksi->query("SELECT * FROM reservasi");
			while ($mem = mysqli_fetch_assoc($hasil)):
			echo " ".$mem['Nama'].""; endwhile;?></td>
      </tr>
      <tr>
        <td>Jenis Kamar</td>
		<td><?php require('koneksi.php');
			$hasil = $koneksi->query("SELECT * FROM reservasi");
			while ($mem = mysqli_fetch_assoc($hasil)):
			echo " ".$mem['Kamar'].""; endwhile; ?></td>
      </tr>
      <tr>
        <td>Jumlah Tamu</td>
		<td><?php require('koneksi.php');
			$hasil = $koneksi->query("SELECT * FROM reservasi");
			while ($mem = mysqli_fetch_assoc($hasil)):
			echo " ".$mem['Tamu'].""; endwhile; ?></td>
      </tr>
	  <tr>
		<th align="right">Total Biaya </th>
		<td><?php echo "".total().""?></td>
    </tbody>
  </table>
	</div>
</body>
</html>