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
td{
    padding:15px;
}
table{
    border: 3px solid black;
    border-radius:10px;
   
}
.hias{
  text-decoration: underline #36888f  10px;
}
footer{
  background-color:#36888f;
  text-decoration: underline  #1e1d2b 5px ;
}
</style >
<body >
<nav style="background-color: #36888f ;color:#ffff;" class="navbar navbar-expand-lg navbar-light">
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
    <p class=" hias lead"> adanya kesediaan stock pada toko</p>
  </div>
</div>
    <?php 
    $barang = [
        ['no'=>'1','kodebarang'=>'KB001','namabarang'=>'VGA Gigabyte Radeon RX 570','satuan'=>'pcs','hargapokok'=>'Rp. 2.500.000,-','hargajual'=>'Rp. 2.800.000,-'],
        ['no'=>'2','kodebarang'=>'KB002','namabarang'=>'RAM G.Skill Trident Z 16Gb (2x8Gb)','satuan'=>'pcs','hargapokok'=>'Rp. 1.700.000,-','hargajual'=>'Rp. 1.800.000,-'],
        ['no'=>'3','kodebarang'=>'KB003','namabarang'=>'Monitor AOC 24 Inc','satuan'=>'pcs','hargapokok'=>'Rp. 2.100.000,-','hargajual'=>'Rp. 2.400.000,-'],
        ['no'=>'4','kodebarang'=>'KB004','namabarang'=>'Motherboard Aorus B550','satuan'=>'pcs','hargapokok'=>'Rp. 2.550.000,-','hargajual'=>'Rp. 3.200.000,-'],
        ['no'=>'5','kodebarang'=>'KB005','namabarang'=>'Processor AMD Ryzen 5 5600x','satuan'=>'pcs','hargapokok'=>'Rp. 4.400.000,-','hargajual'=>'Rp. 5.700.000,-'],
    ];
    ?>
    <table class=" shadow-lg rounded" class="table table-striped table-hover " align='center'>
    <tr>
        <td class="table-dark"><b>NO</b></td>
        <td class="table-dark"><b>KODE BARANG</b></td>
        <td class="table-dark"><b>NAMA BARANG</td>
        <td class="table-dark"><b>SATUAN</td>
        <td class="table-dark"><b>HARGA POKOK</b></td>
        <td class="table-dark"><b>HARGA JUAL</b></td>
    </tr>
    <?php 
    $no=1;
    foreach ($barang as $row){
    ?>
    <tr style="color:#000000" >
        <td class=" table-secondary"><?php echo $no ?></td>
        <td class=" table-secondary"><?php echo $row ['kodebarang'] ?></td>
        <td class=" table-secondary"><?php echo $row ['namabarang'] ?></td>
        <td class=" table-secondary"><?php echo $row ['satuan'] ?></td>
        <td class=" table-secondary"><?php echo $row ['hargapokok'] ?></td>
        <td class=" table-secondary"><?php echo $row ['hargajual'] ?></td>

    </tr>
    <?php
    $no++;
    }
    ?>
    </table>
    <br>
    <br>
    <br>
    <br>
    <div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36888f" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,224C384,235,480,213,576,186.7C672,160,768,128,864,138.7C960,149,1056,203,1152,192C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer align='center' >By Daffa Ramadhan SP</footer>  
  </div  >
</body>
</html>