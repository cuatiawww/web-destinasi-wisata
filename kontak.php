<!DOCTYPE html>
    <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Yogyakarta</title>
  
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
      .banner-image {
        background-image: url('assets/bg3.png');
        background-size: cover;
      }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>


    <!-- Navigasi   -->
    <?php include 'navigation.php'?>

    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="content text-center">
      </div>
    </div>

    
    <!-- Isi Kontak -->
    
    <br>
    <br>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
   <div class="container body">
      <div class="row">
        <div class="col peding-100">
          <h1>Kontak Saran</h1>
          <p>
            Silahkan tinggalkan pesan anda, pada kolom yang tersedia.
          </p>
        </div>
 
        <div class="col peding-30">
          <form method="post" action="tambah_saran.php">
             
            <div class="form-group">
              <label for="">Nama Anda:</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
            </div>
 
            <div class="form-group">
              <label for="">E-mail Anda:</label>
              <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
            </div>
 
            <div class="form-group">
              <label for="">Pesan Anda:</label>
              <textarea name="pesan" class="form-control" cols="30" rows="7"></textarea>
            </div>
 
            <input onclick="simpan()" class="btn btn-primary" type="submit" value="Kirim" name="kirim">
            
          </form>
        </div>
      </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <br>
    <br>

    
    <!-- footer -->
    <span><?php include 'foot.php'?></span>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
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
    <script> 
    function simpan(){
      alert("Berhasil di Simpan");
   }
</script>
  </body>
</html>


