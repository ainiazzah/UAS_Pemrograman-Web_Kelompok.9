<?php
//Menghubungkan website dengan database
date_default_timezone_set('Asia/Jakarta');
$mydb=new mysqli('localhost', 'root', '', 'seaa_stationary');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEAA STATIONARY</title>
		<!-- akses gambar di folder images -->
        <link rel="shortcut icon" href="assets/images/logo.png">
		<!-- akses ke file css di folder assets/css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<!-- akses bootstrap offline di folder pribadi assets/bootstrap -->
        <link rel="stylesheet" href="assets/bootstrap/bootstrap-theme.css" media="screen" >
		<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
		<!-- akses font online -->
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- akses font offline -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    </head>

    <body>
		<!-- Navigasi -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href=".">SEAA STATIONARY</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href=".">Home</a></li>
						<li><a href=".?hal=Belanja">Belanja</a></li>
						<li><a href=".?hal=pembayaran">Pembayaran</a></li>
						<li><a href=".?hal=footer">Hubungi kami</a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- /Navigasi -->
		
		<!-- Content -->
		<?php
		$hal="lib/$_GET[hal].php";
		if(file_exists($hal)) include $hal;
		else include 'lib/home.php';
		?>
		<!-- /Content -->
		
		<!-- Footer -->
		<?php
		$hal="lib/footer.php";
		if(file_exists($hal)) include $hal;
		?>
		<!-- /Footer -->

        <!-- akses javascript online -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<!-- akses file javascript offline -->
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
        <script src="assets/js/prosesBayar.js"></script>
    </body>
</html>