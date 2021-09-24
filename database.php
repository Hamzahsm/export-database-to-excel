<?php 

$con = mysqli_connect("localhost","user","password","dbname");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
function query($datas) {
 global $con;
 $result = mysqli_query($con, $datas); 
 $datakosong = [];

 while( $isidata = mysqli_fetch_assoc($result)) {
     $datakosong[] = $isidata;
 }

 return $datakosong; 
}

$datas = query("SELECT * FROM formweb");  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Database Brief Klien</title>
  </head>
  <body>
  <div style="text-align: center; margin-bottom: 20px;">
                        <a href="#"><h4 style="font-weight: bold; margin: 20px 0;">KEMBALI</h4></a>
                    </div>
    <div class="text-center mt-5">
        <h1 style="font-weight: bold;"></h1>
        <h3> BERIKUT ADALAH DATABASE BRIEF ORDER WEBSITE KLIEN</h3>
    </div>



<div class=" row-cols-md-4 row row-cols-1 mt-5" style="margin-left: 13px;">
    <?php foreach($datas as $data) :?>
    <div class="col " >
      <div class="card" style="width: 18rem;">
        <img src="lampiran-logo-web/<?= $data["logo"];?>" class="card-img-top" alt="komputer asus">
          <div class="card-body"> 
            <h5 class="card-title"><strong>Nama Klien:  </strong><?= $data["nama"];?></h5>
            <h5 class="card-title"><strong>Tanggal Form Masuk:  </strong><?= $data["tanggal"];?></h5>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa fa-cog" style="font-size:20px; color: white;"></i> Detail Brief</button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <section class="detail">
                      <h5 class="text-center bg-dark" style="color : white;"><strong>Brief Klien : </strong><?= $data["nama"];?></h5>
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <tbody>
                            <tr>
                              <th scope="col">Nama</th>
                              <td><?= $data["nama"];?></td>
                            </tr>

                            <tr>
                            <th scope="col">Email</th>
                              <td><?= $data["email"];?></td>
                            </tr>

                            <tr>
                            <th scope="col">Alamat</th>
                              <td><?= $data["alamat"];?></td>
                            </tr>
                        
                            <tr>
                              <th scope="row">Nomor Telepon</th>
                              <td><?= $data["nomortelepon"];?></td>

                            </tr>

                            <tr>
                            <th scope="row">Nama Usaha</th>
                              <td><?= $data["namausaha"]; ?></td>
                            </tr>

                            <tr>
                            <th scope="row">Bidang Usaha</th>
                              <td><?= $data["bidangusaha"]; ?></td>
                            </tr>

                            <tr>
                            <th scope="row">Deskripsi Usaha</th>
                              <td><?= $data["deskripsiusaha"];?></td>
                            </tr>
                        
                            <tr>
                              <th scope="row">Gender Pelanggan Selama ini</th>
                              <td><?= $data["gender"];?></td>

                            </tr>

                            <tr>
                            <th scope="row">Usia Pelanggan Mayoritas Selama ini</th>
                              <td><?= $data["usia"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Target Demografi</th>
                              <td><?= $data["demografi"];?></td>
                            </tr>

                            <tr>
                              <th scope="row">Target Geografis</th>
                              <td><?= $data["geografis"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Target Gender</th>
                              <td><?= $data["targetgender"]; ?></td>
                            </tr>

                            <tr>
                            <th scope="row">Promosi Yang Ingin Dicantumkan</th>
                              <td><?= $data["promosi"];?></td>
                            </tr>

                            <tr>
                              <th scope="row">Referensi Desain Web (link)</th>
                              <td><?= $data["referensiweb"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Warna Pilihan Web</th>
                              <td><?= $data["warnaweb"];?></td>
                            </tr>

                            <tr> 
                            <th scope="row">Jenis Service Website</th>
                              <td><?= $data["jenispaket"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Email Web</th>
                              <td><?= $data["emailweb"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Nomor CTA</th>
                              <td><?= $data["nomorcta"];?></td>
                            </tr>

                            <tr>
                            <th scope="row">Lampiran Logo</th>
                              <td><a href="lampiran-logo-web/<?php $data["logo"]; ?>" target="_blank">download</a>
                                  <p>Lampiran link : <?= $data['linklogo'];?></p>
                            </td>
                            </tr>
                            
                            <tr>
                              <th scope="row">Lampiran Foto</th>
                              <td><a href="lampiran-foto-produk-web/<?php $data["lampiranfoto"]; ?>" target="_blank">download</a>
                                  <p>Lampiran link : <?= $data['linklampiranfoto'];?></p>
                            </td>
                            </tr>

                            
                            <tr>
                            <th scope="row">Lampiran Testimoni</th>
                              <td><a href="lampiran-testimoni-web/<?php $data["lampiranbukti"]; ?>" target="_blank">Download</a>
                              <p>Lampiran link : <?= $data['linklampiranbukti'];?></p>
                            </td>
                            </tr>

                            
                            <tr>
                              <th scope="row">Lampiran Lainnya</th>
                              <td><a href="lampiran-lainnya-web/<?php $data["lampiranlainnya"]; ?>" target="_blank">download</a>
                              <p>Lampiran link : <?= $data['linklampiranlainnya'];?></p>
                            </td>
                            </tr>

                          </tbody>
                        </table>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
    <?php endforeach; ?>
  </div>


  <p><a href="export.php" target="_blank">Download seabagai Excel</a></p>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>