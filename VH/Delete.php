<?php
	$db =  new mysqli("localhost","root","","vhotel");

	$Nama = @$_GET['Nama'];
	$sql = "DELETE from reservasi where Nama='$Nama' ";

	$query = $db->query($sql);
	if($query){
		echo "Data Berhasil didelete";
	}else{
		echo "Data gagal didelete".$db->error;
	}
	echo "<td><a href='Tampil.php'> Tampilkan</a></td>";
?>