<div class="mb-20 space-y-4 px-6 md:px-0">
  <div class="text-center text-2xl font-bold text-gray-800 dark:text-white md:text-4xl">
    Kata orang tentang NTT
  </div>
</div>
<div class="md:columns-2 lg:columns-3 gap-8 space-y-8">
  <?php
  // Koneksi ke database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "db_ntt";

  $conn = new mysqli($servername, $username, $password, $database);

  // Periksa koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  // Ambil data destinasi dari database
  $query = "SELECT * FROM testimoni";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="aspect-auto p-8 border border-gray-100 rounded-3xl bg-white dark:bg-gray-800 dark:border-gray-700 shadow-2xl shadow-gray-600/10 dark:shadow-none">';
      echo '<div class="flex gap-4">';
      echo '<img class="w-12 h-12 rounded-full" src="' . $row['gambar_url'] . '" alt="user avatar" width="200" height="200" loading="lazy">';
      echo '<div>';
      echo '<h6 class="text-lg font-medium text-gray-700 dark:text-white">' . $row['nama'] . '</h6>';
      echo '<p class="text-sm text-gray-500 dark:text-gray-300">' . $row['posisi'] . '</p>';
      echo '</div>';
      echo '</div>';
      echo '<p class="mt-8">' . $row['deskripsi'] . '</p>';
      echo '</div>';
    }
  } else {
    echo "Tidak ada data yang ditemukan.";
  }
  ?>


</div>