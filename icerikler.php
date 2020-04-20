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
    <h3>İÇERİKLER...</h3>
    <div class="row">
      <div class="col-md-12">
        <small><a href="ekle.php">İçerik Ekle</a></small>
        <table class="table table-responsive-sm teble-sm table-hover boyut-12">
          <thead class="camurcun-6 camurcun-1t">
            <tr>
              <th>ID</th>
              <th>Başlık</th>
              <th>Özet</th>
              <th>Yazar</th>
              <th>Eklenme</th>
              <th>Güncellenme</th>
              <th>Okunma</th>
              <th>Yorum</th>
              <th>Durum</th>
              <th>İşlem</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2</td>
              <td>Linux Hata Çözümleri</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>13.04.2020</td>
              <td>15.04.2020</td>
              <td>101</td>
              <td>53</td>
              <td>Aktif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
              </td>
            </tr>
            <tr>
              <td>53</td>
              <td>Php Çalışma Ortamı Hazırlama</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>15.04.2020</td>
              <td>15.04.2020</td>
              <td>256</td>
              <td>8</td>
              <td>Aktif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
              </td>
            </tr>
            <tr class="mor-1">
              <td>69</td>
              <td>Hayat Sevince Güzel</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>16.03.2020</td>
              <td>16.03.2020</td>
              <td>0</td>
              <td>0</td>
              <td>Pasif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
              </td>
            </tr>
            <tr>
              <td>126</td>
              <td>Ubuntu Kurulumu</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>14.04.2020</td>
              <td>14.04.2020</td>
              <td>186</td>
              <td>18</td>
              <td>Aktif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
              </td>
            </tr>
            <tr>
              <td>127</td>
              <td>Ubuntu Kurulum Sonrası Yapılması Gerekenler</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>14.04.2020</td>
              <td>14.04.2020</td>
              <td>180</td>
              <td>5</td>
              <td>Aktif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
              </td>
            </tr>
            <tr class="mor-1">
              <td>129</td>
              <td>Linux Mu? Windows Mu?</td>
              <td>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat...
              </td>
              <td>Hasan Çiçek</td>
              <td>14.03.2020</td>
              <td>14.03.2020</td>
              <td>0</td>
              <td>0</td>
              <td>Pasif</td>
              <td>
                <a href="#" title="Göster" class="text-success"><i class="fa fa-eye"></i></a><br />
                <a href="#" title="Güncelle" class="text-danger"><i class="fa fa-edit"></i></a><br />
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