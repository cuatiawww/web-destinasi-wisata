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

<body>
    <!-- Navigation -->
    <nav>
        <?php
        include 'navigation.php';
        ?>
    </nav>
    <span>
        <img src="./assets/bg2.png" class="h-full w-full bg-gradient-to-b from-transparent to-white" alt="">
    </span>
    <span class="flex w-full flex-col mt-20 px-20 max-md:max-w-full max-md:px-5 mb-10">
        <div class="flex w-full">
            <?php
            include 'koneksi.php';
            // Ambil ID destinasi dari parameter URL
            $id_destinasi = intval($_GET['id']);


            // Query untuk mendapatkan detail destinasi
            $query = "SELECT * FROM destinasi WHERE id = $id_destinasi";
            $result = $koneksi->query($query);
            if ($result->num_rows > 0) {
                $detail = $result->fetch_assoc();
                ?>
                <!-- Description Section -->
                <div class="w-1/2 p-8">
                    <h1 class="text-3xl font-bold mb-4">
                        <?php echo $detail['tempat_wisata']; ?>
                    </h1>
                    <p class="mb-4">
                        <?php echo $detail['isi_konten']; ?>
                    </p>
                </div>

                <!-- Map Section -->
                <div class="w-1/2 relative">
                    <iframe src="<?php echo $detail['map_url']; ?>" width="100%" height="450" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php
            } else {
                echo "Destinasi tidak ditemukan.";
            }

            $koneksi->close();
            ?>
        </div>
        <hr class="mt-10">
    </span>
    <span class="flex w-full flex-col px-20 max-md:max-w-full max-md:px-5 mb-10">
        <div
            class="text-black text-5xl font-medium self-stretch mt-20 mx-5 max-md:max-w-full max-md:text-4xl max-md:mr-2.5 max-md:mt-10 mb-10 ">
            Pertanyaan yang sering diajukan
        </div>
        <div id="contentQnA1" class="mb-2"></div>
        <div id="contentQnA2" class="mb-2"></div>
    </span>
    <span>
        <?php include 'foot.php' ?>
    </span>
    </div>
    <!-- JS -->
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./js/route-html.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/qna.js"></script>
    <script src="./js/footer.js"></script>
</body>

</html>