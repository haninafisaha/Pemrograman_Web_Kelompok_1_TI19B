<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

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
    <title><?php echo $judul; ?></title>
  </head>
  <body>
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
        <a class="dropdown-item" href="<?= base_url(); ?>mahasiswa/tambah">TO-DO LIST</a>
        <a class="dropdown-item" href="<?= base_url(); ?>mahasiswa">SUBMITTED TASK DATA</a>
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
      <a class="nav-link" href="<?= base_url(); ?>about">ABOUT US</a>
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
<br>
<br>
