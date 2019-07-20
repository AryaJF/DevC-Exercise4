<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pintar.com</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'navbar.php' ?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height:100vh;">
      <div class="carousel-item active">
        <img src="assets/image-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/image-2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/image-3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container" id="awal-keterangan">
  <h2>Kenapa Memilih Kami ?</h2>
  <div class="row">
    <div class="col-sm">
      <div class="logo-pilihan"><i class="far fa-pencil-ruler"></i></div>
      <h4>Mudah dalam Belajar</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
    <div class="col-sm">
      <div class="logo-pilihan"><i class="far fa-books"></i></div>
      <h4>Lancar Membaca</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
    <div class="col-sm">
      <div class="logo-pilihan"><i class="far fa-shopping-cart"></i></div>
      <h4>Pandai Berdagang</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm">
      <div class="logo-pilihan"><i class="fal fa-comments"></i></div>
      <h4>Sopan Santun</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
    <div class="col-sm">
      <div class="logo-pilihan"><i class="far fa-user-md-chat"></i></div>
      <h4>Berani Tampil</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
    <div class="col-sm">
      <div class="logo-pilihan"><i class="fal fa-comments-dollar"></i></div>
      <h4>Jago Marketing</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus excepturi voluptatum iusto atque consectetur ipsa earum illum illo, cupiditate reprehenderit.</p>
    </div>
  </div>
</div>

<div class="container-fluid" id="pembelajaran">
  <div id="pembelajaran-container">
  <h3>Agar dapat mengikuti pembelajaran</h3>
  <h5>Silahkan untuk mengisi data formulir, kami akan mengirimnya lewat email anda</h5>
  <div class="row">
    <div class="col-md-12">
    <form method="POST" id="formulir" action="">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input id="email_belajar" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email anda">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputRequest">Request Kelas belajar</label>
        <textarea class="form-control" id="exampleInputRequest" rows="5" placeholder="Masukkan permintaan belajar"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
  </div>
  </div>
</div>

<?php include 'about.php' ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kelas Pembelajaran belum diupload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Kami meminta maaf kepada anda semua karena kelas pembelajaran belum diupload dalam website, untuk sementara waktu kami menyediakan kelas pembelajaran lewat Email. Silahkan untuk mengisi email anda di bawah ini
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  $("#formulir").submit(function(){
    var email = $("#email_belajar").val();
    $("#formulir").attr("action", "https://formspree.io/"+email );
  });
</script>
</html>