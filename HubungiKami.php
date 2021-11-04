<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,600;1,700&family=Roboto+Slab:wght@500;700&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="HubungiKami.css">
    <title>Digital Talent</title>
    <!-- SCRIPT JS -->
  <script>
    function formHubungi(){
      var nama = document.forms["formHub"]["kode_contact"];
        var nama = document.forms["formHub"]["nama_lengkap"];
        var email = document.forms["formHub"]["email"];
        var subjek = document.forms["formHub"]["subjek"];
        var pesan = document.forms["formHub"]["pesan"];
        if (nama.value == "") {
            window.alert("Silahkan Masukkan Nama Anda !.");
            nama.focus();
            return false;
        }

        if (email.value == "") {
            window.alert("Silahkan Masukkan Email yang Valid.");
            email.focus();
            return false;
        }

        if (subjek.value == "") {
            window.alert("Silahkan Ketikkan Subjek!.");
            subjek.focus();
            return false;
        }

        if (pesan.value == "") {
            window.alert("Silahkan Ketikkan Pesan !.");
            pesan.focus();
            return false;
        }

        return true;
    }

    </script>
    </head>

  <body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="Project.html"><i>
        <img src="images/logo2.jpg" style="width: 70px; height: 70px;"/>  
        Smasaka</i></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                Profil
              </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="profilesekolah/sambutan.php">Sambutan Kepala Sekolah &nbsp;<img src="https://img.icons8.com/pastel-glyph/64/000000/-chair.png" width="20" height="20"/></a></li>
              <li><a class="dropdown-item" href="profilesekolah/visimisi.php">Visi dan Misi &nbsp;<img src="https://img.icons8.com/ios-filled/50/000000/table.png" width="20" height="20"/></a></li>
              <li><a class="dropdown-item" href="profilesekolah/saranaprasarana.php">Sarana dan Prasarana &nbsp; <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                  Pendidik & Tenaga Pendidik
                </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/strukturorganisasisekolah.php">Struktur Organisasi Sekolah &nbsp;
                  <img src="https://img.icons8.com/ios-filled/50/000000/tree-structure.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/kepalasekolah.php">Kepala Sekolah &nbsp;
                  <img src="https://img.icons8.com/pastel-glyph/100/000000/school-director--v2.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/komitesekolah.php">Komite Sekolah &nbsp; 
                  <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/dataguru.php">Data Guru &nbsp; 
                  <img src="https://img.icons8.com/ios-filled/50/000000/teacher.png" width="20" height="20"/></a>
                </li>
                <li>
                  <a class="dropdown-item" href="pendidiktenagapendidik/datasiswa.php">Data Siswa &nbsp; 
                  <img src="https://img.icons8.com/ios-glyphs/30/000000/room.png" width="20" height="20"/></a>
                </li>
              </ul>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="ekstrakulikuler/ekstra.php">Extra Kulikuler</a>
          </li>
          <a class="btn tombol-button text-light" href="login/login.php" role="button">Login</a>
        </ul>
        </div>
      </div>
    </nav>

    <!-- End Navbar -->

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><img src="http://sman1kawedanan.weebly.com/uploads/4/9/3/6/4936553/7693531.jpg" alt="" width="150" height="150"><br>SMA NEGERI 1 KAWEDANAN <br><br><span>Menjadi Sekolah Unggul dalam Imtaq, Iptek, Budi Pekerti, Peduli Lingkungan dan Berwawasan Internasional</span></h1>
  </div>
</div>
<!-- Akhir Jumbotron -->
<!-- Container -->
<div class="container">
  <!-- Info Panel -->
  <div class="row justify-content-center">
    <div class="col-5 info-panel">
      <div class="row">
        <div class="col">
        <h4>HUBUNGI KAMI</h4>
          <p>Untuk menghubungi technical service SMA NEGERI 1 KAWEDANAN tentang apapun</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Panel -->
  <!--contact-->
  <section id="contact" class="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2> Contact Us </h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
      <div class="card">
  <img src="images/maps.png" class="card-img-top" alt="Maps SMA 1">
  <div class="card-body">
    <h5 class="card-title">Tentang Kami</h5>
    <p class="card-text">SMA Negeri 1 KAWEDANAN (SMASAKA) adalah Sekolah Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti (Bumi Wiyata Setya Bhakti) dan Inscada (Innovative School of SMASAKA) yang berada di Kota Magetan, Jawa Timur.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><img src="http://sman1kawedanan.weebly.com/uploads/4/9/3/6/4936553/7693531.jpg" alt="" width="30" height="30"> &nbsp; SMA NEGERI 1 KAWEDANAN</li>
    <li class="list-group-item"><img src="https://img.icons8.com/doodle/96/000000/google-maps-new.png" width="30" height="30"/> &nbsp; Jl. Raya Genengan-Goranggareng, Kec. Kawedanan, Kab. Magetan, Prop. Jatim</li>
    <li class="list-group-item"><img src="https://img.icons8.com/dusk/64/000000/fax.png" width="30" height="30"/> &nbsp; (0351) 439255</li>
  </ul>
</div>
</div>
      <div class="col-lg-6">
       <div class="col-lg-8 mb-5">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validasiPejabat()">
                      <div class="form-group mb-2">
                        <label for="kode_contact">Kode Contact</label>
                        <input type="text" name="kode_contact" id="kode_contact" class="form-control"  value="<?php echo isset($data['kode_contact']) ? $data['kode_contact'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"  value="<?php echo isset($data['nama_lengkap']) ? $data['nama_lengkap'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="subjek">Subjek</label>
                        <input type="text" name="subjek" id="level" class="form-control"  value="<?php echo isset($data['subjek']) ? $data['subjek'] : ''; ?>">
                      </div>
                      <div class="form-group mb-2">
                        <label for="pesan">Pesan</label>
                        <input type="text" name="pesan" id="pesan" class="form-control"  value="<?php echo isset($data['pesan']) ? $data['pesan'] : ''; ?>">
                      </div>
                      <button type="submit" class="btn btn-primary" name="submit">Update</button> <a href="contact.php" class="btn btn-secondary">Back</a>
                    </form>
                  </div>
  </div>
  </section>
    
  <!-- Footer -->
<footer>
<ul class="list-inline">
  <li class="list-inline-item">TENTANG KAMI
  <p>Sekolah Menengah Atas Negeri bertaraf internasional yang biasa disebut Buwitashakti</br>
</p></li>
  <li class="list-inline-item">GET SOCIAL
  <p><a href="https://web.facebook.com/sman1kawedanan/?_rdc=1&_rdr"><img src="https://img.icons8.com/doodle/240/000000/facebook-new.png" width="30" height="30"/></a> &nbsp; 
  <a href=""><img src="https://img.icons8.com/doodle/240/000000/youtube-play--v2.png" width="30" height="30"/></a> &nbsp;
  <a href="https://www.instagram.com/official_sman1kawedanan/?hl=id"><img src="https://img.icons8.com/doodle/240/000000/instagram--v1.png" width="30" height="30"/></a> &nbsp;
  <a href="download.php"><img src="https://img.icons8.com/fluency/48/000000/download-from-ftp.png" width="30" height="30"/>
</p></li>
  <li class="list-inline-item col-10">CONTACT INFO
  <p><img src="https://img.icons8.com/doodle/96/000000/google-maps-new.png" width="30" height="30"/> &nbsp; Jl. Raya Genengan-Goranggareng, Kec. Kawedanan, Kab. Magetan, Prop. Jatim<br><br>
  <img src="https://img.icons8.com/doodle/96/000000/ringing-phone.png" width="30" height="30"/> &nbsp; (0351) 439255<br><br>
  <img src="https://img.icons8.com/doodle/96/000000/gmail.png" width="30" height="30"/> &nbsp; INFO@SMAN1KAWEDANAN.SCH.ID</p></li>
</ul>
</div>
</footer>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript">

	function formHub() {

    var nama = document.getElementById("kode_contact").value;
		var nama = document.getElementById("nama").value;

		var email = document.getElementById("email").value;

		var subjek = document.getElementById("subjek").value;

    var pesan = document.getElementById("pesan").value;

		if (kode_contact != "" && nama != "" && email!="" && subjek !="" && pesan !="") {

			return true;

		}else{

			alert('Harap Isi Semua Data yang Tersedia!');

		}

	}

</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

  
</html>