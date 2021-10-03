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
      <img src="task.jpg" alt="Task" width="1100" height="500">
      <div class="carousel-caption">
        <h3>TO-DO LIST</h3>
        <p>Cek dan Kerjakan Task Harian Anda</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="menanam.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="tanaman.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="mengangkut.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
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
  <a class="navbar-brand" href="#">HOME</a>

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
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <br>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0" bg="dark">
  <p>MATA KULIAH PEMROGRAMAN WEB</p>
  <p>KELOMPOK 1</p>
  <p>TEKNIK INFORMATIKA 2019 B</p>
  <p>2019</p>
</div>

</body>
</html>
