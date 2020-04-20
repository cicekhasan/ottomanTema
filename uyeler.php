<!doctype html>
<html lang="tr">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/renk.css">
	<title>Aysubey</title>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<a class="navbar-brand" href="aysubey.com">
			<img src="img/logo.png" width="40" height="40" alt="">
		</a>
		<a class="navbar-brand" href="index.php">OTTOMAN GRANDSON</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Anasayfa</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Kategoriler
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="kategori.php">Php</a>
						<a class="dropdown-item" href="kategori.php">Linux</a>
						<a class="dropdown-item" href="kategori.php">Markdown</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="kategori.php">Genel</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Yönetim
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="uyeler.php">Üyeler</a>
						<a class="dropdown-item" href="kategoriler.php">Kategoriler</a>
						<a class="dropdown-item" href="icerikler.php">İçerikler</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="yonetim.php">Yönetim</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="giris.php">Giriş</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hasan Çiçek
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="profil.php">Profil</a>
						<a class="dropdown-item" href="site-ayarlari.php">Ayarlar</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="cikis.php">Çıkış</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="hakkimizda.php">Hakkımızda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="iletisim.php">İletişim</a>
				</li>
			</ul>
			<form class="form-inline ml-5 my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Site içi arama..." aria-label="Search">
				<button class="btn btn-outline-warning bg-info my-2 my-sm-0" type="submit">Ara</button>
			</form>
		</div>
	</nav>
	<!-- Sayfa içeriği başlangıç... -->
	<div class="container my-3 p-2">
    <h3>Osmanlı Torunları...</h3>
    <div class="row">
	    <div class="col-md-12">
	    	<table class="table table-sm table-responsive-sm table-hover boyut-12">
	    		<thead class="camurcun-6 camurcun-1t">
	    			<tr>
	    				<th>ID</th>
	    				<th>Adı ve Soyadı</th>
	    				<th>Kullanıcı Adı/E-Posta</th>
	    				<th>Yetki</th>
	    				<th>Konum</th>
	    				<th>IP</th>
	    				<th>Eklenme Tarihi</th>
	    				<th>Durumu</th>
	    				<th>İşlem</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			<tr class="camGobegi-1">
	    				<td>1</td>
	    				<td>Hasan Çiçek</td>
	    				<td>hasan.cicek@yandex.com.tr</td>
	    				<td>Yazar</td>
	    				<td>Ankara</td>
	    				<td>175.156.88.45</td>
	    				<td>15.04.2020</td>
	    				<td>Aktif</td>
	    				<td>
	    					<a href="#" class="text-success"><i class="fa fa-eye"></i></a>
	    					<a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>2</td>
	    				<td>Horoz Nuri</td>
	    				<td>horoz@gmail.com</td>
	    				<td>Üye</td>
	    				<td>İstanbul</td>
	    				<td>212.45.123.34</td>
	    				<td>14.04.2020</td>
	    				<td>Aktif</td>
	    				<td>
	    					<a href="#" class="text-success"><i class="fa fa-eye"></i></a>
	    					<a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>3</td>
	    				<td>Türkan Şoray</td>
	    				<td>sorayTurkan@hotmail.com</td>
	    				<td>Üye</td>
	    				<td>Kayseri</td>
	    				<td>125.62.124.66</td>
	    				<td>14.04.2020</td>
	    				<td>Aktif</td>
	    				<td>
	    					<a href="#" class="text-success"><i class="fa fa-eye"></i></a>
	    					<a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
	    				</td>
	    			</tr>
	    			<tr>
	    				<td>4</td>
	    				<td>Ayhan Işık</td>
	    				<td>ayhan.isik@gmail.com</td>
	    				<td>Üye</td>
	    				<td>Yozgat</td>
	    				<td>126.122.111.45</td>
	    				<td>13.04.2020</td>
	    				<td>Aktif</td>
	    				<td>
	    					<a href="#" class="text-success"><i class="fa fa-eye"></i></a>
	    					<a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
	    				</td>
	    			</tr>
	    			<tr class="mor-1">
	    				<td>5</td>
	    				<td>Brad Pitt</td>
	    				<td>brad.pitt@gmail.com</td>
	    				<td>Üye</td>
	    				<td>Newyork</td>
	    				<td>1.12.145.2</td>
	    				<td>13.04.2020</td>
	    				<td>Pasif</td>
	    				<td>
	    					<a href="#" class="text-success"><i class="fa fa-eye"></i></a>
	    					<a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
	    				</td>
	    			</tr>
	    		</tbody>
	    	</table>
	    </div>
	    <div class="col-md-4"></div>
    </div>
	</div>
	<!-- Sayfa içeriği bitiş... -->
	<div class="container-fluid">
		<div class="row">
			<footer class="col-12 bg-success text-center text-white py-3">
				<small>2020 &copy <a href="aysubey.com" title="" class="text-white">aysubey.com</a></small>
			</footer>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/fontawesome.js"></script>
</body>
</html>