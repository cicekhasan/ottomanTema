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
    <h3>Osmanlı Torunu Yönetimi</h3>
    <div class="row">
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-info text-white">
          <div class="card-body text-center">
            <span class="boyut-32">21</span><br />
            <span class="boyut-12">Üye Sayısı</span>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-success text-white">
          <div class="card-body text-center">
            <span class="boyut-32">18</span><br />
            <span class="boyut-12">İçerik Sayısı</span>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-warning text-white">
          <div class="card-body text-center">
            <span class="boyut-32">1</span><br />
            <span class="boyut-12">Mesaj Sayısı</span>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-secondary text-white">
          <div class="card-body text-center">
            <span class="boyut-32">34</span><br />
            <span class="boyut-12">Yorum Sayısı</span>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-danger text-white">
          <div class="card-body text-center">
            <span class="boyut-32">1818</span><br />
            <span class="boyut-12">Site Hit</span>
          </div>
        </div>
      </div>
      <div class="col-4 col-md-2 my-2">
        <div class="card bg-primary text-white">
          <div class="card-body text-center">
            <span class="boyut-32">256</span><br />
            <span class="boyut-12">İçerik Hit</span>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-2">
      <div class="col-md-8">
        <div class="col-md-12 mb-2">
          <div class="card">
            <div class="card-header bg-secondary text-white kalin">Son Eklenen Üyeler</div>
            <div class="card-body">
              <table class="table table-responsive table-hover boyut-12">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>E-Posta</th>
                    <th>Konum</th>
                    <th>IP</th>
                    <th>Eklenme Tarihi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>4</td>
                    <td>hasan.cicek@yandex.com.tr</td>
                    <td>Ankara</td>
                    <td>175.156.88.45</td>
                    <td>15.04.2020</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>kemal.sunal@gmail.com</td>
                    <td>İstanbul</td>
                    <td>212.45.123.34</td>
                    <td>14.04.2020</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>senersen@hotmail.com</td>
                    <td>Kayseri</td>
                    <td>125.62.124.66</td>
                    <td>14.04.2020</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>ayhan.isik@gmail.com</td>
                    <td>Yozgat</td>
                    <td>126.122.111.45</td>
                    <td>13.04.2020</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-2">
          <div class="card">
            <div class="card-header bg-secondary text-white kalin">Popüler İçerikler</div>
            <div class="card-body">
              <table class="table table-responsive table-hover boyut-12">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Başlık</th>
                    <th>Eklenme</th>
                    <th>Güncellenme</th>
                    <th>Okunma</th>
                    <th>Yorum</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>53</td>
                    <td>Php Çalışma Ortamı Hazırlama</td>
                    <td>15.04.2020</td>
                    <td>15.04.2020</td>
                    <td>256</td>
                    <td>8</td>
                  </tr>
                  <tr>
                    <td>126</td>
                    <td>Ubuntu Kurulumu</td>
                    <td>14.04.2020</td>
                    <td>14.04.2020</td>
                    <td>186</td>
                    <td>18</td>
                  </tr>
                  <tr>
                    <td>127</td>
                    <td>Ubuntu Kurulum Sonrası Yapılması Gerekenler</td>
                    <td>14.04.2020</td>
                    <td>14.04.2020</td>
                    <td>180</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Linux Hata Çözümleri</td>
                    <td>13.04.2020</td>
                    <td>15.04.2020</td>
                    <td>101</td>
                    <td>53</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-12 mb-2">
          <div class="card h-100">
            <div class="card-header bg-success kalin text-white">
              GENEL BİLGİLER
            </div>
            <div class="card-body text-center">
              <table class="table table-responsive boyut-12">
                <thead>
                  <tr>
                    <th></th>
                    <th>Aktif</th>
                    <th>Pasif</th>
                    <th>Toplam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="sol"><a href="uyeler.php">Üyeler</a></td>
                    <td>36</td>
                    <td>3</td>
                    <td>39</td>
                  </tr>
                  <tr>
                    <td class="sol"><a href="kategoriler.php">Kategoriler</a></td>
                    <td>5</td>
                    <td>2</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td class="sol"><a href="yorumlar.php">İçeriler</a></td>
                    <td>58</td>
                    <td>4</td>
                    <td>62</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-12 mb-2">
          <div class="card h-100">
            <div class="card-header bg-primary kalin text-white">
              YENİLER
            </div>
            <div class="card-body text-center">
              <table class="table table-responsive boyut-12">
                <thead>
                  <tr>
                    <th></th>
                    <th>Onaylı</th>
                    <th>Onay Bekleyen</th>
                    <th>Toplam</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="sol"><a href="uyeler.php">Üyeler</a></td>
                    <td>36</td>
                    <td>3</td>
                    <td>39</td>
                  </tr>
                  <tr>
                    <td class="sol"><a href="mesajlar.php">Mesajlar</a></td>
                    <td>36</td>
                    <td>3</td>
                    <td>39</td>
                  </tr>
                  <tr>
                    <td class="sol"><a href="yorumlar.php">Yorumlar</a></td>
                    <td>36</td>
                    <td>3</td>
                    <td>39</td>
                  </tr>
                </tbody>
              </table>
            </div>
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