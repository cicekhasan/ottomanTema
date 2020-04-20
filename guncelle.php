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
  <script src="js/jquery-3.4.1.min.js"></script>
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
  <div class="container-fluid my-3 p-2">
  	<div class="row">
  		<div class="col-md-9">  			
	  		<div class="card">
	  			<div class="card-header bg-success py-1 text-white">
	  				XXX Başlığındaki içeriği düzenliyorsunuz!
	  			</div>
	  			<div class="card-body">
						<form>
						  <div class="form-group">
						    <label for="exampleFormControlInput1">İçeriğin Başlığı</label>
						    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="İçerik Başlığı">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">İçerik</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" cols="80" id="icerik" name="icerik"> </textarea>
						  </div>
						</form>
	  			</div>
	  		</div>
  		</div>
  		<div class="col-md-3">
  			<div class="card mb-2">
  				<div class="card-header bg-success py-1 text-white">
  					Durumu ve Kategorisi
  				</div>
  				<div class="card-body">
						<form>
						  <div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Durum Seç!</option>
						      <option selected>Yayında</option>
						      <option>Pasif!</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <select class="form-control" id="exampleFormControlSelect1">
						      <option>Kategori Seç!</option>
						      <option>Genel</option>
						      <option selected>Php</option>
						      <option>Linux</option>
						      <option>Markdown</option>
						    </select>
						  </div>
						</form>	
  				</div>
  			</div>
  			<div class="card mb-2">
  				<div class="card-header bg-success py-1 text-white">
  					İçerik Resmi
  				</div>
  				<div class="card-body">
						<form>
						  <div class="form-group">
						    <img src="uploads/tenis-700x450.jpg" alt="" class="img-fluid img-thumbnail mb-2">
						    <input type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						</form>
  				</div>
  			</div>
  		</div>
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
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fontawesome.js"></script>
  <!-- CK EDITOR -->
  <script type="text/javascript">
    CKEDITOR.replace( 'icerik' );
  </script>
</body>
</html>