  <!DOCTYPE html>
  <html lang="id">

  <head>
  	<title><?= $title . $data;	 ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
  	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets'); ?>/lp/css/style.css">
  </head>

  <body>
  	<header>
  		<div class="container">
  			<div class="row">
  				<div class="col xl2 l2 m6 s5">
  					<a href="<?= base_url(); ?>">
  						<img src="<?= base_url('assets'); ?>/lp/img/3.png" style="width: 192px; height: 50px;">
  					</a>
  				</div>
  				<div class="col xl10 l10 m6 s7">
  					<div class="mainmenu">
  						<ul>
  							<li><a class="" href="<?= base_url('informasi'); ?>">Pusat Informasi</a></li>
  							<li><a class="" href="<?= base_url('data/panduan'); ?>">Panduan</a></li>
  							<li><a class="active" href="<?= base_url('data/indonesia'); ?>" class="butmenu">Data Persebaran</a></li>
  						</ul>
  					</div>
  					<div class="mobilemenu">
  						<span onclick="openNav()">&#9776;</span>
  						<div id="mySidenav" class="sidemenu">
  							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  							<ul>
  								<li><a class="" href="<?= base_url('data/informasi'); ?>">Pusat Informasi</a></li>
  								<li><a class="" href="<?= base_url('data/panduan'); ?>">Panduan</a></li>
  								<li><a class="" href="<?= base_url('data/indonesia'); ?>" class="butmenu">Data Persebaran</a></li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>
  	<section class="banner">
  		<div class="container">
  			<div class="banner-description">
  				<div class="banner-content">
  					<span class="semi-title">Awas bahaya Covid-19 !</span>
  					<h2>
  						Kurangi kontak fisik dan Gunakan Masker saat keluar Rumah
  					</h2>
  					<p>
  						Belum ada Obat Spesifik untuk mencegah maupun mengobati corona virus disease (COVID-19).
  					</p>
  					<a href="<?= base_url('faq'); ?>" class="filbtn">FAQ</a>
  				</div>
  			</div>
  		</div>
  	</section>
  </body>

  </html>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  	function openNav() {
  		document.getElementById("mySidenav").style.width = "100%";
  	}

  	function closeNav() {
  		document.getElementById("mySidenav").style.width = "0";
  	}
  </script>
