<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
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
table{
    
    border: 3px solid black;
    border-radius:10px;

}
td{
    padding: 10px;;
}
.hias{
  text-decoration: underline #36888f 10px ;
}
footer{
  background-color:#36888f;
  text-decoration: underline  #1e1d2b 5px ;
}
</style>
<body>
<?php 
$no=1;
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
    <div style="background-color:#2f3042 " class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">TOKO COCO</h1>
    <p class=" hias lead">menampilkan barang yang di input</p>
  </div>
</div>
<div data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0" >
<table class=" table-success rounded shadow-lg" class="table" align='center' border='0' >
    <tr>
       <td class="table-dark" ><b>NO</b></td>
       <td class="table-dark" ><b>KODE BARANG</b></td>
       <td class="table-dark" ><b>NAMA BARANG</b></td>
       <td class="table-dark" ><b>SATUAN</b></td>
       <td class="table-dark" ><b>HARGA POKOK</b></td>
       <td class="table-dark" ><b>HARGA JUAL</b></td>
    </tr>
    <tr style="color:#000000 ;" >
       <td  class=" table-secondary"><?php echo $no ?></td>
       <td class=" table-secondary"><?php if (isset ($_GET['kodebarang'])) {
          echo ($_GET['kodebarang'] );
       }   ?></td>

       <td class=" table-secondary"><?php if (isset ($_GET['namabarang'])) {
           echo ($_GET['namabarang'] );
       }   ?></td>

       <td class=" table-secondary"><?php if (isset ($_GET['satuan'])) {
          echo ($_GET['satuan'] );
       }   ?></td>
       <td class=" table-secondary"><?php if (isset($_GET['harga'])) {
           echo ($_GET['harga'] );
       }   ?></td>
       <td class=" table-secondary"><?php if (isset($_GET['hargajual'])) {
           echo ($_GET['hargajual'] );
       }  ?></td>
    </tr>
</table>
</div>
<br>
<br>
<br>
<br>
<div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36888f" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,224C384,235,480,213,576,186.7C672,160,768,128,864,138.7C960,149,1056,203,1152,192C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer  align='center' >By Daffa Ramadhan SP</footer>
    </div  >
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>