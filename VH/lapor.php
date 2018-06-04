<?php include 'header.php'; ?>
<div class="fh5co-parallax" style="background-image: url(images/banner.jpg);" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
					<h2 class="text-center"><font color="white"> Laporan Data </font></h2>
        <div class="container">
            <canvas id="myChart" width="10px" height="3px"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'doughnut',
				text: 'LAPORAN DATA',
                data: {
                    labels: ["Standar room", "Suite room", "Superior room", "VVIP room"],
                    datasets: [{
                            label: 'LAPORAN DATA',
                            data: [1, 1, 1, 2],
                            backgroundColor: [
                                'rgba(255, 0, 50, 1)',
                                'rgba(0, 255, 55, 1)',
                                'rgba(250, 100, 170, 1)',
                                'rgba(75, 192, 255, 1)',
                            ],
                            borderColor: [
                                'rgba(255,0, 50,1)',
                                'rgba(0, 255, 55, 1)',
                                'rgba(250, 100, 170, 1)',
                                'rgba(75, 192, 255, 1)',
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    
                }
            });
        </script>
        </div>
        </div>
        </div>
        </div>
        </div>

<?php include 'footer.php';?>