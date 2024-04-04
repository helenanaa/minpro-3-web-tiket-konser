<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soundrenaline Festival</title> 
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <nav>
  <div class="wrapper">
      <div class="logo"><a href=''>Tiket Konser</a></div>
      <div class="menu"> 
        <ul>
          <li><a href="#home">Home</a></li> 
          <li><a href="#lineup">Line Up</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#partners">Partners</a></li>
          <li><a href="#pesantiket">Pesan Tiket</a></li>
          <li><a href="" class="tbl-biru">Sign Up</a></li> 
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <br><br><br>
    <section id="home">
      <img src="https://www.visitkorea.or.id/uploads/article/b5b6c82e98b456113b47bde17fadb090.jpg" width="45%"/>
    <div class="container">
      <p class="deskripsi">Saksikan Konser Idol Kesayangan Kamu</p>
      <p>Untuk kamu yang ingin bertemu langsung dengan idol kesayanganmu ayo gabung bersama kami di konser tahunan ini.</p>
      <p>Konser ini hanya akan dilaksanakan setahun sekali, yang mengundang idol dari luar terkhusus idol kpop yang dimana sudah mendunia.</p>
      <h2>Catat tanggalnya 17 Mei 2024</h2>
      <h2>Beli Tiketnya Sekarang Agar Tidak Kehabisan!!!</h2>
      <p>Jangan sampai lewatkan serunya berbagai special performance eksklusif hanya disini.</p>
    <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
    </div>
    </section>

    <br><br>
    <section id="lineup">
      <div class="tengah">
      <div class="kolom">
        <h2>Line Up</h2>
        <p>Inilah idol Korea yang akan menemani kamu selama berjalannya konser:</p>
      </div>
      <br>
      <div class="lineup-list">
        <div class="kartu-lineup">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrrflt71xfT1yRqLLm2rIYMm7yltL83vacFw&s"/>
      <p>EXO</p>
      </div>
      <div class="kartu-lineup">
      <img src="https://awsimages.detik.net.id/community/media/visual/2020/10/22/blackpink-promosi-lovesick-girls-di-tv-amerika-1_43.jpeg?w=700&q=90"/>
      <p>BLACKPINK</p>
      </div>
      <div class="kartu-lineup">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUkDrmV44R1-jvI7HcqqwVIVQz3eOEZzYZyw&s"/>
      <p>NCT DREAM</p>
      </div>
      <div class="kartu-lineup">
      <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/03/16/c5f7d0b46c0061ba7d7073a14e5bceea-2919609452.jpg"/>
      <p>TREASURE</p>
      </div>
</div>
</div>
    </section>

       <!--untuk venue-->
       <br><br>
    <section id="venue">
      <img src="https://www.warnaplus.com/wp-content/uploads/2020/01/OOR-Layout-New.jpg" width="45%"/>
    <div class="kolom">
      <h2>VENUE</h2>
      <p class="deskripsi">Booking Seat mu Sekarang!!!</p>
      <p>Syarat dan Ketentuan:</p>
      <p>- Tiket harus ditukarkan H-1 konser akan dilaksanakan.</p>
      <p>- Nanti akan mendapatkan gelang konser untuk masuk ke dalam venue.<p>
      <p>- Apabila H-1 tidak datang untuk menukarkan tiket, maka akan hangus dan tidak bisa untuk masuk ke dalam venue pada hari konser dimulai<p>
    </div>
    </section>

    <!--untuk partner-->
    <br><br>
    <section id="partners">
      <div class="kolom">
        <h2>Media Partners</h2>
        <p>Terima kasih kepada beberapa media partner yang telah bekerja sama dengan kami, sehingga acara kami dapat berlangsung dengan lancar</p>
      </div>
      <br>
      <img src="https://pbs.twimg.com/media/DHpKZgbUIAEy0Ci.jpg" width="70%"/>
      </section>
  </div>
</body>
</html>

<?php 
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "projek";

$koneksi = mysqli_connect($host, $user, $pass, $db); //untuk koneksi kita menggunakan fungsi dari mysql. lalu kita masukan parameter untuk melakukan koneksi ke database
if(!$koneksi){ 
    die("Gagal Koneksi");
}
$nama           ="";
$tanggal_lahir  ="";
$jenis_tiket    ="";
$harga_tiket    ="";
$jumlah_tiket   ="";
$total_harga    ="";
$sukses         ="";
$error          ="";

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op = "";
}
if($op == 'delete'){
    $id = $_GET['id'];
    $sql1 = "delete from tiket_konser where id = '$id'";
    $q1 = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil menghapus data";
    }else{
        $error = "Gagal menghapus data";
    }

}

if($op == 'edit'){
    $id             = $_GET['id'];
    $sql1           = "select *from tiket_konser where id = '$id'";
    $q1             = mysqli_query($koneksi,$sql1);
    $r1             = mysqli_fetch_array($q1);
    $nama           = $r1['nama'];
    $tanggal_lahir  = $r1['tanggal_lahir'];
    $jenis_tiket    = $r1['jenis_tiket'];
    $harga_tiket    = $r1['harga_tiket'];
    $jumlah_tiket   = $r1['jumlah_tiket'];
    $total_harga    = $r1['total_harga'];

    if($nama == ''){
        $error = "Data tidak ditemukan";
    }


}

if(isset($_POST['simpan'])){ //untuk create
    $nama           = $_POST['nama'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $jenis_tiket    = $_POST['jenis_tiket'];
    $harga_tiket    = $_POST['harga_tiket'];
    $jumlah_tiket   = $_POST['jumlah_tiket'];
    $total_harga    = $_POST['total_harga'];

    if($nama && $tanggal_lahir && $jenis_tiket && $harga_tiket && $jumlah_tiket && $total_harga){
        if($op == 'edit'){ //untuk update
            $sql1 = "update tiket_konser set nama = '$nama',tanggal_lahir='$tanggal_lahir',jenis_tiket='$jenis_tiket',harga_tiket='$harga_tiket',jumlah_tiket='$jumlah_tiket',total_harga='$total_harga'";
            $q1 = mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses = "Data berhasil diupdate";
            }else{
                $error = "Data gagal diupdate";
            }
        }else{ //untuk insert
            $sql1 = "insert into tiket_konser(nama,tanggal_lahir,jenis_tiket,harga_tiket,jumlah_tiket,total_harga) values('$nama','$tanggal_lahir','$jenis_tiket','$harga_tiket','$jumlah_tiket','$total_harga')";
        $q1 = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Berhasil memasukkan data baru";
        }else{
           
         $error = "Gagal memasukkan data";
        }
        }
    }else{
        $error="Silahkan input semua data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Tiket Konser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .mx-auto { width:1000px }
        .card {margin-top: 10px}
    </style>
</head>
<body>
    <br><br><br><br>
    <div class="mx-auto"> 
    <div class="card">
  <div class="card-header">
    Lakukan Pemesanan Tiket Konser Disini
  </div>
  <div class="card-body">
      <?php
        if($error){
            ?>
            <div class="alert alert-danger" role="alert">
  <?php echo $error ?>
</div>
            <?php
            header("refresh:5;url=index.php");
          }
        ?>
      <?php
        if($sukses){
            ?>
            <div class="alert alert-success" role="alert">
  <?php echo $sukses ?>
</div>
<?php
            header("refresh:5;url=index.php");
          }
        ?>
    <form action="" method="POST">
    <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama"value="<?php echo $nama ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"value="<?php echo $tanggal_lahir ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jenis_tiket" class="col-sm-2 col-form-label">Jenis Tiket</label>
    <div class="col-sm-10">
      <select class="form-control" name="jenis_tiket" id="jenis_tiket">
          <option value="">- Pilih Jenis Tiket -</option>
          <option value="Premium_Tribune" <?php if($jenis_tiket == "Premium_Tribune") echo "selected" ?>>Premium Tribune</option>
          <option value="Festival" <?php if($jenis_tiket == "Festival") echo "selected" ?>>Festival</option>
          <option value="Tribune_1" <?php if($jenis_tiket == "Tribune_1") echo "selected" ?>>Tribune 1</option>
          <option value="Tribune_2" <?php if($jenis_tiket == "Tribune_2") echo "selected" ?>>Tibune 2</option>
      </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="harga_tiket" class="col-sm-2 col-form-label">Harga Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="harga_tiket" name="harga_tiket"value="<?php echo $harga_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket"value="<?php echo $jumlah_tiket ?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="total_harga" name="total_harga"value="<?php echo $total_harga ?>">
    </div>
  </div>
  <div class="col-12">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/>
  </div>
    </form>
  </div>
</div>

<div class="card">
  <div class="card-header text-white bg-black">
    Lihat Data Anda Disini
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">jenis Tiket</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Aksi</th>
            </tr>
    </thead>
            <tbody>
                <?php
                $sql2   = "select * from tiket_konser order by id desc";
                $q2     = mysqli_query($koneksi,$sql2);
                $urut   = 1;
                while($r2 = mysqli_fetch_array($q2)){
                    $id             = $r2['id'];
                    $nama           = $r2['nama'];
                    $tanggal_lahir  = $r2['tanggal_lahir'];
                    $jenis_tiket    = $r2['jenis_tiket'];
                    $harga_tiket    = $r2['harga_tiket'];
                    $jumlah_tiket   = $r2['jumlah_tiket'];
                    $total_harga    = $r2['total_harga'];

                    ?>
                    <tr>
                        <th scope="row"><?php echo $urut++ ?></th>
                        <td scope="row"><?php echo $nama ?></td>
                        <td scope="row"><?php echo $tanggal_lahir ?></td>
                        <td scope="row"><?php echo $jenis_tiket ?></td>
                        <td scope="row"><?php echo $harga_tiket ?></td>
                        <td scope="row"><?php echo $jumlah_tiket ?></td>
                        <td scope="row"><?php echo $total_harga ?></td>
                        <td scope="row">
                        <a href="index.php?op=edit&id=<?php echo $id?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                            <a href="index.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin menghapus hapus data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    <?php

                }
                ?>
            </tbody>
    </table>
  </div>
</div>
    </div>
</body>
</html>