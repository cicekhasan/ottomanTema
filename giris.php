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
		<div class="row">
			<div class="col-md-4 offset-md-1">
        <div class="card p-2">
          <div class="card-header bg-success text-white text-center">OTTOMAN TORUNU GİRİŞİ</div>
          <div class="card-body">
            <form action="giris.php" method="post">
              <div class="form-group">
                <label for="ottomanInputEmail1">E-Posta Adresi</label>
                <input type="email" class="form-control" id="ottomanInputEmail1" aria-describedby="emailHelp" required>
                <small id="emailHelp" class="form-text text-muted">E-Postanızı başkası ile paylaşmayacağız.</small>
              </div>
              <div class="form-group">
                <label for="ottomanInputPassword1">Parola</label>
                <input type="password" class="form-control" id="ottomanInputPassword1" required>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="ottomanCheck1">
                <label class="form-check-label" for="ottomanCheck1">Beni hatırla.</label>
              </div>
              <button type="submit" name="giris" class="btn btn-success btn-sm btn-block">Giriş</button>
            </form>
          </div>
        </div>
			</div>
			<div class="col-md-6">
        <div class="card p-2">
          <div class="card-header bg-success text-white text-center">OTTOMAN TORUNU KAYIT!</div>
          <div class="card-body">
            <form action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="E-Posta hesabınız..." required>
                </div>
              </div>
              <small class="form-text text-muted">E-Posta hesabınız giriş için kullanılacaktır...</small><br /><br />         
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Parolanız..." required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Parolayı tekrar giriniz..." required>
                </div>
              </div><br />
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Ad ve Soyadınız..." required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Kullanıcı Adınız..." required>
                </div>
              </div><br />
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Kullandığınız programlama dilleri...">
                </div>
              </div>
              <small class="form-text text-muted">Sadece yorum yapabilmeniz için onay gerektirir. Gezmeye başlayabilirsiniz.</small>
              <button type="submit" name="uyeOl" class="btn btn-success btn-sm btn-block">Üye Ol</button>
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
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fontawesome.js"></script>
</body>
</html>