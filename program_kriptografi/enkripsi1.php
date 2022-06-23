<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </head>
  <style>
    /* This only changes this particular animation duration */
.animate__animated.animate__fadeIn {
  --animate-duration: 3s;
}

/* This changes all the animations globally */
:root {
  --animate-duration: 800ms;
  --animate-delay: 0.9s;
}
.animate__animated.animate__fadeInUp {
  --animate-duration: 5s;
}
  </style>
  <body>
    <title>Cesar Cipher</title>
    

    <div class="container-fluid animate__animated animate__fadeIn">
      
      <nav class="navbar navbar-expand-lg navbar-dark  bg-primary">
        <a class="navbar-brand" href="enkripsi1.php">UAS SisPengKom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="enkripsi1.php">Caesar Cipher<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="index.php">Vigenere<span class="sr-only">(current)</span></a>
            </li>
        </ul>



        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit" class="btn">Search</button>
        </form>
        </div>
      </nav>
      
      <body>
        <div class="container-fluid ">
            <div class="row">
               <div class="col-sm-12" style="background-color: rgb(57, 110, 176); color:white; text-align: center;"><h1>Program kriptografi Caesar Cipher</h1>
              
               
            <div class="container">
            <div class="row">
           <div class="col-sm" >
            <div class="align-middle pt-5"></div>
            kriptografi adalah disiplin ilmu yang mempelajari teknik enkripsi naskah asli (plaintext) yang tersusun acak, dengan memanfaatkan kunci enkripsi sehingga naskah tersebut berubah menjadi teks yang sulit terbaca (ciphertext) oleh user yang tidak memiliki kunci dekripsi.
           </div>
           <div class="col-sm">
             <img src="krip1.jpeg" alt="">
           </div>
           
         </div>
   </div>
       </div>
       

       <div class="container-fluid  animate__animated animate__fadeInUp">
        <div class="row">
          <div class="col-sm-12" style="background-color:#bec0c0a2; color:gray; text-align: center;"><h1>Enkripsi Dan Dekripsi</h1>
          </div>
        </div>



        <div class="container-fluid">
		<div class="row" style="background-color:;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form action="/action_page.php">
    				<div class="form-group">
    					<label for="pesan"><h5>Masukan Pesan</h5></label>
    					<textarea id="pesan" name="pesan" class="form-control"></textarea>
    					<small class="text-muted">Masukan yang diperbolehkan: huruf</small>
  					</div>
  					<div class="form-group">
    					<label for="katakunci"><h5>Kunci</h5></label>
    					<input type="number" min="0" max="25" id="kunci" name="kunci" class="form-control col-md-6">
    					<small class="text-muted">Masukan yang diperbolehkan: angka(1-25)</small>
  					</div>
  					<div class="form-group" id="enkripsi" style="display: none;">
    					<label for="pesan"><h5>Hasil Enkripsi</h5></label>
    					<textarea id="hasil_enkripsi" name="hasil_enkripsi" class="form-control"></textarea>
  					</div>
  					<div class="form-group" id="dekripsi" style="display: none;">
    					<label for="pesan"><h5>Hasil Dekripsi</h5></label>
    					<textarea id="hasil_dekripsi" name="hasil_dekripsi" class="form-control"></textarea>
  					</div>
  					<br>
  					<div>
  						<button type="button" class="btn btn-success" id="btn_enkripsi" name="btn_enkripsi" onclick="enkripsi()">Enkripsi</button>
    					<button type="button" class="btn btn-success" id="btn_dekripsi" name="btn_dekripsi" onclick="dekripsi()">Dekripsi</button>
    					<button type="reset" class="btn btn-danger" id="btn_batal" name="btn_batal">Batal</button>
    					<a href=""><button type="button" class="btn btn-danger" id="btn_reset" name="btn_reset" style="display: none;">Reset</button></a>
  					</div>
  				</form>
			</div>
  		</div>
	</div>

	<hr>
		<div class="container-fluid">
			<p>&copy;Anang Pitriyanto & M.Noer Ramadhan</p>
		</div>

    <script type="text/javascript">
    function enkripsi() {
        var text = document.getElementById("pesan").value;
        var key = document.getElementById("kunci").value;

        shift = (26 + key) % 26;
        var result = "";
        for (var i = 0; i < text.length; i++) {
        	var c = text.charCodeAt(i);
        	if (65 <= c && c <= 90) { result += String.fromCharCode((c - 65 + shift) % 26 + 65); } //uppercase
        	else if (97 <= c && c <= 122) { result += String.fromCharCode((c - 97 + shift) % 26 + 97); } //lowercase
        	else { result += text.charAt(i); }
        }

        document.getElementById("enkripsi").style.display = "block";
        document.getElementById("hasil_enkripsi").value = result;
        document.getElementById("btn_enkripsi").style.display = "none";
        document.getElementById("btn_dekripsi").style.display = "none";
        document.getElementById("btn_batal").style.display = "none";
        document.getElementById("btn_reset").style.display = "block";
    }

    function dekripsi() {
    	var text = document.getElementById("pesan").value;
        var key = document.getElementById("kunci").value;

        shift = (26 - key) % 26;
        var result = "";
        for (var i = 0; i < text.length; i++) {
        	var c = text.charCodeAt(i);
        	if (65 <= c && c <= 90) { result += String.fromCharCode((c - 65 + shift) % 26 + 65); } //uppercase
        	else if (97 <= c && c <= 122) { result += String.fromCharCode((c - 97 + shift) % 26 + 97); } //lowercase
        	else { result += text.charAt(i); } 
        }

        document.getElementById("dekripsi").style.display = "block";
        document.getElementById("hasil_dekripsi").value = result;
        document.getElementById("btn_enkripsi").style.display = "none";
        document.getElementById("btn_dekripsi").style.display = "none";
        document.getElementById("btn_batal").style.display = "none";
        document.getElementById("btn_reset").style.display = "block";
    }
</script>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       </body>
    </html>
    