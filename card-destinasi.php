<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body >
  <!-- Navigation -->
  <?php
  include 'navigation.php';
  ?>

  <span>
    <img src="./assets/bg3.png" class="h-full w-full bg-gradient-to-b from-transparent to-white" alt="">
    <div class="absolute inset-0 flex items-center justify-center  ">
      <p class="text-white text-center text-7xl font-extrabold" style="letter-spacing: 0.15em;">Destinasi</p>
    </div>
  </span>
  <span class="flex w-full flex-col mt-4 px-20 max-md:max-w-full max-md:px-5 mb-10">
    <div
      class="text-black text-5xl font-medium self-stretch mt-20 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-10 ">
      Destinasi di NTT
    </div>
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
      <?php
      include 'koneksi.php';

      $query = "SELECT * FROM destinasi";
      $result = $koneksi->query($query);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imagePath = './assets/' . $row['Gambar']; 

            if (file_exists($imagePath)) {
                echo '<a href="detail-destinasi.php?id=' . $row['id'] . '" class="no-underline">';
                echo '<div class="card h-80 card-side rounded-lg overflow-hidden shadow-xl glass">';
                echo '<img src="' . $imagePath . '" alt="Gambar ' . $row['tempat_wisata'] . '" class="w-60"/>';
                echo '<div class="card-body p-4">';
                echo '<h2 class="card-title text-xl font-bold">' . $row['tempat_wisata'] . '</h2>';
                echo '<p class="line-clamp-3">' . $row['isi_konten'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
            } else {
                echo 'Image not found: ' . $imagePath;
            }
        }
    } else {
        echo "Tidak ada destinasi wisata yang ditemukan.";
    }
  // }
      $koneksi->close();
      ?>

    </div>
    <!-- INSPIRASI PERJALANAN -->
    <div
      class="text-black text-5xl font-medium self-stretch mt-20 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-20">
      Inspirasi Perjalanan
    </div>
    <div>
      <?php
      include 'content-inspirasi.php';
      ?>
    </div>
  </span>
  <span ><?php include 'foot.php'?></span>
  </div>
  <a href=""></a>
  </script>
  <!-- JS -->
  <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>