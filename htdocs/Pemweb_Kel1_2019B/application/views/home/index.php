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

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2><a href="<?= base_url(); ?>about" style="color:black">About Us</a></h2>
      <h5>Photo of Us:</h5>
      <img src="<?php echo base_url() ?>assets/images/logo.jpeg" alt="Tib" width="350" height="350">
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
      <hr class="d-sm-none">
      </div>
      </div>
      
    <div class="col-sm-8 text-justify">
      <h2>BERITA TERKINI</h2>
      <h5>Dipublikasikan pada 15 Oktober 2021, 11:12 WIB</h5>
      <img src="<?php echo base_url() ?>assets/images/liputan.jpg" alt="liputan" width="731" height="300">
      <h4><a href="https://www.liputan6.com/bisnis/read/4685035/mantap-produksi-beras-indonesia-naik-meski-lahan-pertanian-makin-sempit" style="color:black"><p>Mantap, Produksi Beras Indonesia Naik Meski Lahan Pertanian Makin Sempit</p></a></h4>
      <p><strong>Liputan6.com, Jakarta</strong> - Badan Pusat Statistik (BPS) melaporkan, produksi padi dan beras hingga September 2021 ini mengalami peningkatan. Namun begitu, luas lahan panen padi justru mengalami penyempitan.</p>
      <p>Kepala BPS Margo Yuwono menyebut, realisasi panen padi sepanjang Januari-September 2021 sebesar 8,77 juta ha, atau mengalami penurunan sekitar 237,65 ribu ha (2,64 persen) dibandingkan realisasi panen padi di 2020 sebesar 9,01 juta ha.</p>
      <p>Sementara itu, potensi panen sepanjang Oktober-Desember 2021 diperkirakan sebesar 1,75 juta ha.</p>
      <p>"Dengan demikian, total potensi luas panen padi pada 2021 diperkirakan mencapai 10,52 juta ha, atau mengalami penurunan sekitar 141,95 ribu ha, atau setara 1,33 persen dibandingkan luas panen padi di 2020 yang sebesar 10,66 juta ha," terang Margo dalam sesi teleconference, Jumat (15/10/2021).</p>
      <p>Di sisi lain, Margo melanjutkan, produksi padi di Indonesia sepanjang Januari-September 2021 diperkirakan sekitar 45,61 juta ton gabah kering giling (GKG), atau mengalami kenaikan 65,39 ribu ton GKG (0,14 persen) dibandingkan 2020 yang sebesar 45,55 juta ton GKG.</p>
      <p>Adapun potensi produksi sepanjang Oktober-Desember 2021 sebesar 9,66 juta ton GKG. Dengan demikian, total potensi produksi padi pada 2021 diperkirakan mencapai 55,27 juta ton GKG, atau naik 620,42 ribu ton GKG (1,14 persen) dibandingkan 2020 yang sebesar 54,65 juta ton GKG.</p>
      <br>

      <h2>INFORMASI PERTANIAN</h2>
      <h5>Dipublikasikan pada 19 Oktober 2021, 14:03 WIB</h5>
      <img src="<?php echo base_url() ?>assets/images/kultur.jpg" alt="kultur" width="731" height="300">
      <br><h4><a href="https://www.kompas.com/sains/read/2021/10/19/140300123/penerapan-teknologi-kultur-jaringan-pada-pertanian" style="color:black"><p>Penerapan Teknologi Kultur Jaringan pada Pertanian</p></a></h4>
      <p><strong>KOMPAS.com</strong> - Kultur jaringan adalah suatu metode untuk memisahkan bagian dari tanaman seperti sel, jaringan, atau organ dan membudidayakannya dalam lingkungan yang terkendali dan aseptik. Dengan metode ini, bagian tanaman tersebut dapat beregenrasi menjadi tanaman lengkap.</p>
      <p>Teknik kultur jaringan ditemukan oleh Schwann dan Schleiden tahun 1838. Mereka menyatakan bahwa di dalam sel tumbuhan mengandung informasi genetik yang cukup untuk membentuk tanaman lengkap. Cara tersebut bisa dicapai hanya dengan menempatkannya dalam lingkungan yang sesuai.</p> 
      <p>Teknik kultur jaringan dilakukan dengan beberapa tahapan, yaitu pembuatan media, inisiasi, sterilisasi, multiplikasi, pengakaran, dan aklimatasi.</p> 
      <h5><strong><p>Penerapan teknologi kultur jaringan</p></strong></h5>
      <p>Penerapan kultur jaringan memiliki beberapa keuntungan untuk manusia. Penerapan teknologi kultur jaringan pada pertanian adalah sebagai berikut.</p> 
      <ul>
      <li>Mendapatkan tanaman yang baru dalam waktu yang relatif singkat</li> 
      <li>Memperoleh tanaman baru yang bersifat unggul</li> 
      <li>Jumlah yang dihasilkan banyak dan tidak terbatas</li> 
      <li>Bibit terhindar dari hama penyakit</li> 
      <li>Perkembangbiakan dapat dilakukan secara tepat dan hemat waktu</li> 
      <li>Pengadaan bibir tidak tergantung musim.</li>
      </ul>
      <h5><strong><p>Kelemahan kultur jaringan</p></strong></h5>
      <p>Selain memberikan manfaat, kultur jaringan memiliki beberapa kelemahan. Berikut kelemahan kultur jaringan.</p> 
      <ul>
        <li>Biayanya relatif besar karena harus dilakukan di laboratorium</li>
        <li>Tekniknya sulit dilakukan</li> 
        <li>Memerlukan keahlian khusus untuk pengerjaannya</li> 
        <li>Tanaman yang dihasilkan relatif lemah pada bagian akar.</li>
      </ul>
    </div>
  </div>
</div>
