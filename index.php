<!DOCTYPE html>
<html lang="en">
<head>
  <title>Universitas Darma Persada - Presensi Kelas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> <!-- gambar logout -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> <!-- bs 4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- icon -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  #container {
    margin: 0px auto;
    width: 500px;
    height: 375px;
    border: 10px #333 solid;
  }
  #videoElement {
    width: 500px;
    height: 375px;
    background-color: #666;
  }
  </style>
</head>
<body style="background-color: #f2f2f2;">

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #003399;">
  <div class="container">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" href="#"><img src="gambar/favicon.png" style="height: 40px;"></a>
        </li>

        <li class="nav-item">
          <ul style="color: white; padding-left: 5px;" type="none">
            <li style="font-size: 18px;">Sistem Informasi Akademik</li>
            <li style="font-size: 12px;"><i>Universitas Darma Persada</i></li>
          </ul>
        </li>
      </ul>
    </div>

    <p class="text-right"></p>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="#"><i class="fas fa-sign-out-alt"> Logout</i></a>
      </li>
    </ul>
  </div>
</nav>

<div style="background-color: #ffffff; padding-bottom: 0px">
  <div class="container">
    <h6 style="padding-top: 10px;">Presensi Kelas<hr></h6>
  </div>
</div>
<div class="container" style="padding-bottom: 50px;">
  

  <div class="col-sm-12" align="right">
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-plus"> Tambah</i>
    </button>
  </div>

  <div class="col-sm-12" align="center" style="padding-top: 50px;">
    <h1><i>Mulai Presensi Kelas</i></h1>
    <button type="button" class="btn btn-primary btn-lg" data-type="add">Start</button>
  </div>

  <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Tambah Data Mahasiswa</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="nim" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
              </div>
              <!-- <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="nama" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
              </div> -->
              <div class="form-group">
                <i style="font-size: 10px;">Mengambil gambar untuk proses trainings</i>
                <button type="button" class="btn btn-secondary btn-sm">Ambil Foto</button>
              </div>
            </form>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Trainning</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
          
        </div>
      </div>
    </div>

  <!-- <div id="container">
    <video autoplay="false" id="videoElement">
    
    </video>
  </div> -->
</div>
<!-- <script>
  var video = document.querySelector("#videoElement");

    if (navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
          video.srcObject = stream;
        })
        .catch(function (err0r) {
          console.log("Something went wrong!");
        });
    }
</script> -->

</body>
</html>
