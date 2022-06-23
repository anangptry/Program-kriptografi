<html>
  <head>
    <title>Enkripsi dan Dekripsi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand text-white" href="#page-top">UAS SisPengKom</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="enskripsi.php">Enskripsi<span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="dekripsi.php">Dekripsi</a>
          </li>
        </ul>
      </div>
    </nav>
</div class="container-fluid">
  <div class="bg-secondary text-white">


 <div class="jumbotron bg-success text-center">
  <div class="container">
    <h1 class="display-4">Program kriptografi Caesar Cipher</h1>
    <h2 class="text-center">Enkripsi</h2>
  </div>
</div>

      <div class="text-center">
      <h3>Enkripsi</h3>
      <form action="" method="get">
          Kalimat : <input type="text" name="kalimat">
          <br><br>
          key : <input type="text" name="key">
          <br><br>
          <input type="submit" value="kirim">
          <input type="reset" value="ulangi">
      </form>
      </div>
      <?php
          ini_set("display_errors",0);
          $msg = $_GET['kalimat'];
          ini_set("display_errors",0);
          $key = $_GET['key'];
          $mode = 'encrypt';
          $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $trans = '';
          $msg = strtoupper($msg);
          for ($i = 0; $i < strlen($msg); $i++) {
              if (strpos($letters, $msg[$i]) !== false) {
                  $num = strpos($letters, $msg[$i]);
              if ($mode == 'encrypt') {
                  $num += $key;
              } else {
                  $num -= $key;
              }
              
              $cnt = strlen($letters);
              if ($num >= $cnt) {
                  $num -= $cnt;
              } else {
                  $num += $cnt;
              }
              if ($num >= $cnt) {
                  $num = $num - $cnt;
              }
              $trans .= $letters[$num];
              }    
         }
     ?>
     <div class="text-center">
     <div class="alert alert-success" role="alert">
     <?php
        echo 'Hasil : ';
        echo $trans . PHP_EOL;
     ?>
     </div>
        </div>

        </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>