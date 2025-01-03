<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
body{
  font-family: 'Roboto', sans-serif;
  background-color: #1e1d2b;
  color: #ffff;
}
input{
    border: 3px solid black;
    border-radius:5px;
    
}
.pen{
    padding:10px 40px 10px 40px;
}
.hias{
  text-decoration: underline #36888f  10px;
}
.save{
  border-radius: 10px;
}
footer{
  background-color:#36888f;
  text-decoration: underline  #1e1d2b 5px ;
}
</style>
<body>
    <?php
    if (isset($_POST['submit'])){
        echo ($_POST['kodebarang']);
        echo ($_POST['namabarang']);
        echo ($_POST['satuan']);
        echo ($_POST['harga']);
        echo ($_POST['hargajual']);

    }
    ?>
 <nav style="background-color: #36888f  ; color:#ffff;" class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a style="color:#ffff;" class="navbar-brand">TOKO COCO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="color:#ffff;" class="nav-link active" aria-current="page" href="input-stok-barang.php">INPUT</a>
        </li>
        <li class="nav-item">
          <a style="color:#ffff;" class="nav-link"  href="tampil-stock-barang.php">TAMPIL </a>
        </li>
        <li class="nav-item">
          <a style="color:#ffff;" class="nav-link"  href="stock-barang.php">STOCK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div>
 <section>
    <div style="background-color:#2f3042 " class="jumbotron jumbotron-fluid">
  <div  class="container">
    <h1 class="display-4">TOKO COCO</h1>
    <p class=" hias lead">form untuk mengisi barang masuk dan siap di jual</p>
    </div>
  </div>
</div>
</section>
    <br>
    <div class="container  ">
    <form action="tampil-stock-barang.php">
    <div>
    <h3 id="kodebarang"name="kodebarang" >Kode Barang :</h3>
    <input class="form-control"  type="text" name="kodebarang" id="kodebarang">
    </div>
    <br>
    <div>
    <h3 id="namabarang"name="namabarang" >Nama Barang :</h3>
    <input class="form-control"  type="text" name="namabarang" id="namabarang">
    </div>
    <br>
    <div>
    <h3 id="satuan"name="satuan" >Satuan :</h3>
    <input class="form-control"  name="satuan">
    </div>
    <br>
    <div>
    <h3 id="harga" name="harga" >Harga Pokok :</h3>
    <input class="form-control"  type="text" name="harga" id="harga">
    </div>
    <br>
    <div>
    <h3 id="hargajual"name="hargajual" >Harga Jual :</h3>
    <input class="form-control"  type="text" name="hargajual" id="hargajual">
    </div>
    <br>
    <br>
    <div data-aos="fade-up">
    <button class=" save shadow-lg btn btn-outline-success pen " type="submit">SAVE</button>
    </div>
    </form>
    </div>
    <br>
    <br>
    <br>
    <div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36888f" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,224C384,235,480,213,576,186.7C672,160,768,128,864,138.7C960,149,1056,203,1152,192C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer align='center' >By Daffa Ramadhan SP</footer>
    </div  >
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>