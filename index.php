<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bunga Matahari</title>
    <link rel="icon" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bunga Matahari</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedul</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutme">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <button id="dark" type="button" class="btn btn-dark">
              <i class="bi bi-moon-stars"></i>
            </button>
            <button id="light" type="button" class="btn btn-light">
              <i class="bi bi-brightness-high"></i>
            </button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end-->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Helianthus_annuus_exposed_2004-05-22.jpg/330px-Helianthus_annuus_exposed_2004-05-22.jpg "
            class="img-fluid"
            width="300"
          />
          <div>
            <h1 class="fw-bold display-4">Keistimewaan Bunga Matahari</h1>
            <h4 class="lead display-7">
              adalah tumbuhan semusim dari suku kenikir-kenikiran (Asteraceae)
              yang populer, baik sebagai tanaman hias maupun tanaman penghasil
              minyak. Bunga tanaman ini sangat khas: besar, biasanya berwarna
              kuning terang, dengan kepala bunga yang besar (diameter bisa
              mencapai 30 cm). Bunga ini sebetulnya adalah bunga majemuk,
              tersusun dari ratusan hingga ribuan bunga kecil pada satu bongkol.
              Bunga Matahari juga memiliki perilaku khas, yaitu bunganya selalu
              menghadap / condong ke arah matahari atau heliotropisme.
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      $no = 1;

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <h1 id="hero" class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="https://cdn1-production-images-kly.akamaized.net/kD7e_amsXVZ-3fD-NtT6GgKU-7k=/0x61:1920x1143/640x360/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2368223/original/039312400_1537962596-sunflower-1627193_1920.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://asset-a.grid.id//crop/0x0:0x0/700x465/photo/2022/04/13/sunflower-3550693_1280jpg-20220413090710.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://lindungihutan.com/blog/wp-content/uploads/2023/04/Bunga-Matahari-Morfologi-Jenis-Jenisnya-dan-Cara-Budidaya-1.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://asset-a.grid.id/crop/0x0:0x0/750x504/photo/2022/04/22/bunga-mataharijpg-20220422110745.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item">
              <img
                src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/12/02/3339243927.jpg"
                class="d-block w-100"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExample"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SENIN</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Etika Profesi<br />16.20-18.00 | H.4.4
                </li>
                <li class="list-group-item">
                  Sistem Operasi<br />18.30-21.00 | H.4.8
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SELASA</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pendidikan Kewarganegaraan<br />12.30-13.10 | Kulino
                </li>
                <li class="list-group-item">
                  Probabilitas dan Statistik<br />15.30-18.00 | H.4.9
                </li>
                <li class="list-group-item">
                  Kecerdasan Buatan<br />18.30-21.00 | H.4.11
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">RABU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Manajemen Proyek Teknologi Informasi<br />15.30-18.00 | H.4.6
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">KAMIS</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Bahasa Indonesia<br />12.30-14.10 | Kulino
                </li>
                <li class="list-group-item">
                  Pendidikan Agama Islam<br />16.20-18.00 | Kulino
                </li>
                <li class="list-group-item">
                  Penambangan Data<br />18.30-21.00 | H.4.9
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">JUMAT</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  Pemrograman Web Lanjut<br />10.20-12.00 | D.2.K
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <div class="card-header bg-danger text-white">SABTU</div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FREE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- schedule end -->

    <!-- about me begin -->
    <section id="aboutme" class="text-center p-5 bg-danger-subtle">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div class="p-3">
            <img
              src="https://cdn.pixabay.com/photo/2024/03/21/15/38/man-8647994_640.png"
              class="rounded-circle border shadow"
              width="300"
            />
          </div>
          <div class="p-md-5 text-sm-start">
            <h3 class="lead">A11.2023.15463</h3>
            <h1 class="fw-bold">Muhammad Hibnu Putra Arif</h1>
            Program Studi Teknik Informatika<br />
            <a href="https://dinus.ac.id/" class="fw-bold text-decoration-none">
              Universitas Dian Nuswantoro
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->

    <!-- footer begin -->
    <footer id="footer" class="text-center p-5">
      <div>
        <a href=""><i id="ig" class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href=""><i id="x" class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href=""><i id="wa" class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>Muhammad Hibnu Putra Arif</div>
    </footer>
    <!-- footer end-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>

    <!-- <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        document.body.style.backgroundColor = "black";

        document.getElementById("hero").classList.remove("bg-danger-subtle");
        document.getElementById("hero").classList.add("bg-secondary");
        document.getElementById("hero").classList.remove("text-black");
        document.getElementById("hero").classList.add("text-white");

        document.getElementById("gallery").classList.remove("bg-danger-subtle");
        document.getElementById("gallery").classList.add("bg-secondary");
        document.getElementById("gallery").classList.remove("text-black");
        document.getElementById("gallery").classList.add("text-white");

        document.getElementById("footer").classList.remove("text-black");
        document.getElementById("footer").classList.add("text-white");

        document.getElementById("article").classList.remove("text-black");
        document.getElementById("article").classList.add("text-white");

        document.getElementById("ig").classList.remove("text-dark");
        document.getElementById("ig").classList.add("text-light");

        document.getElementById("x").classList.remove("text-dark");
        document.getElementById("x").classList.add("text-light");

        document.getElementById("wa").classList.remove("text-dark");
        document.getElementById("wa").classList.add("text-light");

        document.getElementById("schedule").classList.remove("text-black");
        document.getElementById("schedule").classList.add("text-white");

        document.getElementById("aboutme").classList.remove("bg-danger-subtle");
        document.getElementById("aboutme").classList.add("bg-secondary");
        document.getElementById("aboutme").classList.remove("text-black");
        document.getElementById("aboutme").classList.add("text-white");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.add("bg-secondary");
          collection[i].classList.add("text-white");
          collection[i].classList.remove("text-black");
          collection[i].classList.remove("bg-white");
        }
      };

      document.getElementById("light").onclick = function () {
        document.body.style.backgroundColor = "white";

        document.getElementById("hero").classList.remove("bg-secondary");
        document.getElementById("hero").classList.add("bg-danger-subtle");
        document.getElementById("hero").classList.remove("text-white");
        document.getElementById("hero").classList.add("text-black");

        document.getElementById("gallery").classList.remove("bg-secondary");
        document.getElementById("gallery").classList.add("bg-danger-subtle");
        document.getElementById("gallery").classList.remove("text-white");
        document.getElementById("gallery").classList.add("text-black");

        document.getElementById("footer").classList.remove("text-white");
        document.getElementById("footer").classList.add("text-black");

        document.getElementById("article").classList.remove("text-white");
        document.getElementById("article").classList.add("text-black");

        document.getElementById("ig").classList.remove("text-light");
        document.getElementById("ig").classList.add("text-dark");

        document.getElementById("x").classList.remove("text-light");
        document.getElementById("x").classList.add("text-dark");

        document.getElementById("wa").classList.remove("text-light");
        document.getElementById("wa").classList.add("text-dark");

        document.getElementById("schedul").classList.remove("text-white");
        document.getElementById("schedul").classList.add("text-black");

        document.getElementById("aboutme").classList.remove("bg-secondary");
        document.getElementById("aboutme").classList.add("bg-danger-subtle");
        document.getElementById("aboutme").classList.remove("text-white");
        document.getElementById("aboutme").classList.add("text-black");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("text-white");
          collection[i].classList.add("text-black");
          collection[i].classList.remove("bg-secondary");
          collection[i].classList.add("bg-white");
        }
      };
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
      document.getElementById("dark").onclick = function () {
        document.body.style.backgroundColor = "black";

        document
          .getElementById("hero")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("hero")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("gallery")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("gallery")
          .classList.add("bg-secondary", "text-white");

        document
          .getElementById("aboutme")
          .classList.remove("bg-danger-subtle", "text-black");
        document
          .getElementById("aboutme")
          .classList.add("bg-secondary", "text-white");

        document.getElementById("footer").classList.remove("text-black");
        document.getElementById("footer").classList.add("text-white");

        document.getElementById("article").classList.remove("text-black");
        document.getElementById("article").classList.add("text-white");

        document.getElementById("schedule").classList.remove("text-black");
        document.getElementById("schedule").classList.add("text-white");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.add("bg-secondary", "text-white");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.add("bg-secondary", "text-white");
        }
      };

      document.getElementById("light").onclick = function () {
        document.body.style.backgroundColor = "white";

        document
          .getElementById("hero")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("hero")
          .classList.add("bg-danger-subtle", "text-black");

        document
          .getElementById("gallery")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("gallery")
          .classList.add("bg-danger-subtle", "text-black");

        document
          .getElementById("aboutme")
          .classList.remove("bg-secondary", "text-white");
        document
          .getElementById("aboutme")
          .classList.add("bg-danger-subtle", "text-black");

        document.getElementById("footer").classList.remove("text-white");
        document.getElementById("footer").classList.add("text-black");

        document.getElementById("article").classList.remove("text-white");
        document.getElementById("article").classList.add("text-black");

        document.getElementById("schedule").classList.remove("text-white");
        document.getElementById("schedule").classList.add("text-black");

        const collection = document.getElementsByClassName("card");
        for (let i = 0; i < collection.length; i++) {
          collection[i].classList.remove("bg-secondary", "text-white");
        }

        const collection2 = document.getElementsByClassName("list-group-item");
        for (let i = 0; i < collection2.length; i++) {
          collection2[i].classList.remove("bg-secondary", "text-white");
        }
      };
    </script>
  </body>
</html>