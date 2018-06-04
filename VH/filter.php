<?php include 'header.php';?>
<?php
	$db =  new mysqli("localhost","root","","vhotel");
?>
	<div class="fh5co-parallax" style="background-image: url(images/banner.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Informasi Data Pemesan</h1>
						<?php
						$db =  new mysqli("localhost","root","","vegashotel");
							echo "<table border='1' cellpadding='7' cellspacing='0' align='center'>";
							echo "<tr><td><center>Check-in</center></td><td><center>Check-out</center></td><td><center>Nama Pemesan</center></td><td><center>Jumlah Tamu</center></td><td><center>Jenis Kamar</center></td></tr>";
        					require('koneksi.php');
        					$from = (isset($_POST['from']) ? $_POST['from'] : '');
       						$to = (isset($_POST['to']) ? $_POST['to'] : '');
							if(!$from == null && !$to == null){
        					$result = $koneksi->query("SELECT * FROM reservasi where Checkin between '".$_POST['from']."' AND  '".$_POST['to']."' ORDER by Nama ASC");
							while ($mem = mysql_fetch_assoc($result)):
								echo '<tr>';
					            echo '<td>'.$mem['Checkin'].'</td>';
					            echo '<td>'.$mem['Checkout'].'</td>';
								echo '<td>'.$mem['Nama'].'</td>';
								echo '<td>'.$mem['Tamu'].'</td>';
					            echo '<td>'.$mem['Kamar'].'</td>';
					            echo '</tr>';
							endwhile;
							}
							echo "</table>";
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>