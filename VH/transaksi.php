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
            <form action="print.php" method="POST">
      		<div class="a-col-sm-6 contact-form"><br>&nbsp;
      		<h3 class="text-center"><font color="white"> Form <span>Pencarian</span></font></h3>
          	<form method='POST' action="print.php" >
          		<input type="text" class="form-control" name="cari" placeholder="Insert Your Name" required="">
          		&nbsp;<button class="btn btn-primary" name="add"><center> Cari </center></button>
          	</form>
    </div>
</form>
      </div>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>