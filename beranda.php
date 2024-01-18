<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Wisata NTT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
  <style>
    .banner-image {
      background-image: url('../assets/bg1.png');
      background-size: cover;
    }

    .image-container {
      position: relative;
      height: 100vh;
      /* Sesuaikan dengan ukuran gambar atau halaman */
    }

    .fade-image {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Memastikan gambar sesuai dengan container */
    }

    .image-container::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 30%;
      /* Ubah nilai ini sesuai dengan seberapa tinggi fade yang diinginkan */
      background: linear-gradient(to bottom, rgba(255, 255, 255, 0), white);
      /* Gradient transparan dari bawah */
    }

    .edit-subimage {
      top: 85%;
    }
  </style>
</head>

<body>


  <!-- Navigasi   -->
  <?php include("navigation.php"); ?>
  <span>
    <div class="image-container">
      <img src="./assets/bg1.png" class="h-full w-full fade-image to-white" alt="">
    </div>
    <div class="absolute inset-0 flex items-center justify-center  ">
      <p class="text-white text-center text-7xl font-extrabold" style="letter-spacing: 0.15em;">Temukan dan Ceritakan
        Perjalanan Anda di NTT.</p>
    </div>
  </span>

  <!-- Isi Beranda -->
  <span class="flex w-full flex-col mt-20 px-20 max-md:max-w-full max-md:px-5">
    <div
      class="text-black text-5xl font-extralight self-stretch w-full mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5">
      Nusa Tenggara Timur (NTT) adalah surga tropis di timur Indonesia yang
      menawarkan pengalaman alam dan budaya yang tak tertandingi.
    </div>
    <div
      class="text-black text-right text-5xl font-extralight w-[1039px] max-w-full mr-5 mt-16 self-end max-md:text-4xl max-md:mr-2.5 max-md:mt-10">
      Dari pantai eksotis hingga keunikan budaya, NTT memiliki segalanya untuk
      petualangan Anda.
    </div>
    <div
      class="text-black text-5xl font-extralight self-stretch w-full mt-16 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10">
      Jadi, tunggu apalagi? pastikan untuk merencanakan liburan Anda ke NTT dan
      bagikan cerita petualangan Anda di sini.
    </div>
    <!-- INSPIRASI PERJALANAN -->

    <div
      class="text-black text-5xl font-medium self-stretch mt-20 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-20">
      Inspirasi Perjalanan

    </div>

    <?php
    include 'content-inspirasi.php';
    ?>
  </span>
  <span>
    <div
      class="text-black text-5xl font-medium self-stretch mt-20 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-20 px-20 max-md:px-5">
      Cerita Petualangan NTT
    </div>
    <div style="position: relative; display: flex; justify-content: center;">
      <iframe src="https://www.youtube.com/embed/fqQQluBHi28?autoplay=1&mute=1" width="1000" height="600"
        title="A YouTube video" frameborder="0" allowfullscreen style="border-radius: 20px;"></iframe>
      <div
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 100%; height: 30%; background-color: #000; z-index: -1;">
      </div>
    </div>
  </span>
  <!-- Testimoni -->
  <span class="flex w-full flex-col mt-20 px-20 max-md:max-w-full max-md:px-5 mb-10">
    <?php
    include 'testimoni.php';
    ?>
  </span>
  <!-- footer -->
  <span class="flex w-full flex-col mt-4 px-20 max-md:max-w-full max-md:px-5 mb-10">
    <div id="faq"
      class="text-black text-5xl font-medium self-stretch  mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-10 ">
      Pertanyaan yang sering diajukan
    </div>
    <div id="contentQnA1" class="mb-2"></div>
    <div id="contentQnA2" class="mb-2"></div>
  </span>
  <span>
    <?php include 'foot.php' ?>
  </span>
  </div>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="./js/qna.js"></script>
  <script type="text/javascript">

    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
</body>

</html>