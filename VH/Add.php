<?php
	$db =  new mysqli("localhost","root","","vhotel");

	if(isset($_POST['add'])){
	$Nama = $_POST['Nama'];
	$Email = $_POST['Email'];
	$Checkin = $_POST['Checkin'];
	$Checkout = $_POST['Checkout'];
	$Tamu = $_POST['Tamu'];
	$Kamar = $_POST['Kamar'];

	$sql = "INSERT INTO reservasi VALUES ('$Nama','$Email','$Checkin','$Checkout','$Tamu','$Kamar')";
	$query = $db->query($sql);
	if($query){
		echo "Data berhasil di add";
	}else{
		echo "Data gagal di add".$db->error;
	}
	}
	echo "<a href='/VH/'> Kembali Ke Menu</a> / <a href='reservasi.php'> Inputin dulu datanya</a>";
	echo "<a href='Tampil.php'> Tampilkan Data </a>"
?>