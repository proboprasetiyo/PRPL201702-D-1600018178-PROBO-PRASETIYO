<?php include 'header.php';?>
<div class="fh5co-parallax" style="background-image: url(images/banner.jpg);" data-stellar-background-ratio="0.5">

<!-- reservation-information -->
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<br><br><br>
<h2 class="text-center"><font color="white"> Reservation</h2>
    <form method='POST' action="Add.php">
        <div class="form-group">
            <input type="text" class="form-control" name="Nama" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="Email" placeholder="Email">
        </div>       
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="Tamu">
              <option>Jumlah Tamu</option>
              <option value="1 Orang">1</option>
              <option value="2 Orang">2</option>
              <option value="3 Orang">3</option>
              <option value="4 Orang">4</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="Kamar">
              <option>Tipe Kamar</option>
              <option value="Standar Room">Standar</option>
              <option value="Suite Room">Suite</option>
              <option value="Superior Room">Superior</option>
              <option value="VVIP Room">VVIP</option>
            </select>
            </div></div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
                <label for="Checkin"><i class="ti-calendar"></i> Check-In</label>
				<input type="text" class="form-control" id="date-start" name="Checkin" placeholder="Check In" />
            </div>        
            <div class="col-xs-6">
                <label for="Checkout"><i class="ti-calendar"></i> Check-Out</label>
				<input type="text" class="form-control" id="date-end" name="Checkout" placeholder="Check Out"/>
            </div></div>
        </div>
        <button class="btn btn-primary" name="add"><center> Booking </center></button>
    </form>    
</div>
</div>  
</div>
</div>
<!-- reservation-information -->
</div>

<?php include 'footer.php';?>