<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Management Pertanian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
  
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
<center>
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url() ?>assets/images/task.jpg" alt="Task" width="1100" height="500">
      <div class="carousel-caption">
        <h3><strong>TO-DO LIST</strong></h3>
        <p><strong>Cek dan Kerjakan Task Harian Anda</strong></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/images/menanam.jpg" alt="Menanam" width="1100" height="500">
      <div class="carousel-caption">
        <h3><strong>MANAGEMENT PENYAKIT DAN HAMA</strong></h3>
        <p><strong>Disediakan Cara Mengatasi Penyakit dan Hama</strong></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/images/tanaman.png" alt="Tanaman" width="1100" height="500">
      <div class="carousel-caption">
        <h3><strong>INFORMASI KETERSEDIAAN</strong></h3>
        <p><strong>Berikut Ini Merupakan Informasi Ketersediaan</strong></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url() ?>assets/images/mengangkut.jpg" alt="Mengangkut" width="1100" height="500">
      <div class="carousel-caption">
        <h3><strong>INFORMASI PASAR</strong></h3>
        <p><strong>Berikut Ini Merupakan Informasi Pasar untuk Saat Ini</strong></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</center>
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="<?= base_url(); ?>">HOME</a>

  <!-- Links -->
  <ul class="navbar-nav">
  <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        INFORMATION
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">INFORMASI PASAR</a>
        <a class="dropdown-item" href="#">MANAJEMEN PENYAKIT DAN HAMA</a>
        <a class="dropdown-item" href="#">INFORMASI KETERSEDIAAN</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        OUR TASK
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">TASK</a>
        <a class="dropdown-item" href="#">TO-DO LIST</a>
        <a class="dropdown-item" href="#">SUBMITTED TASK DATA</a>
      </div>
    </li>
  <!-- Brand -->
    <li class="nav-item">
      <a class="nav-link" href="#">BLOG</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">DOCUMENTATION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ABOUT US</a>
    </li>
  <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        DOWNLOAD
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">MANUAL BOOK</a>
      </div>
    </li>
  <!-- Search Button -->
    <li justify-content-right>
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
    </li>
  </ul>
</nav>
<br>
  
<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Us</h2>
      <h5>Photo of Us:</h5>
      <img src="<?php echo base_url() ?>assets/images/tib.jpeg" alt="Tib" width="350" height="350">
      <center><p><strong>TEKNIK INFORMATIKA 2019 B</strong></p></center>
      <p>PRAYOGI KARDANI (19051204055)</p>
      <p>MOCH. ABHIEGAIL ARGO P (19051204066)</p>
      <p>HANI NAFISAH AMALIYA (19051204070)</p>
      <p>MUHAMMAD ANDIKA PUTRA Y (19051204105)</p>
  
      <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideDown("slow");
          });
        });
      </script>
      <style> 
      #panel, #flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
      }

      #panel {
        padding: 50px;
        display: none;
      }
      </style>

 
      <div id="flip"><button type="button" class="btn btn-link"><h3>Some Links</h3></button></div>
      <div id="panel"><p>Kunjungi halaman-halaman di bawah ini :</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url(); ?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.pertanian.go.id/">WEB KEMENTERIAN PERTANIAN RI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/kementan/">TWITTER KEMENTERIAN PERTANIAN RI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com/kementerianpertanian/">INSTAGRAM KEMENTERIAN PERTANIAN RI</a>
        </li>
      </ul>
      <hr class="d-sm-none"></div>
    </div>
    <div class="col-sm-8">
      <h2>BERITA TERKINI</h2>
      <h5>Dipublikasikan pada, Oct 4, 2021</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>INFORMASI PERTANIAN</h2>
      <h5>Dipublikasikan pada, Oct 4, 2021</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-top:30px">
  <p><strong>MATA KULIAH PEMROGRAMAN WEB</strong></p>
  <p><strong>KELOMPOK 1</strong></p>
  <p><strong>TEKNIK INFORMATIKA 2019 B</strong></p>
  <p><strong>2021</strong></p>
</div>

</body>
</html>
