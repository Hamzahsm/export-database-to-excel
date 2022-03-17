<?php 

$con = mysqli_connect("localhost","root","","ytb");
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

$datas = query("SELECT * FROM student_databases");  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>How To Export database to Excel</title>
  </head>
  <body>
    <div class="text-center mt-5">
        <h1 style="font-weight: bold;"></h1>
        <h3>THIS IS OUR DATABASES</h3>
    </div>



<div class=" row-cols-md-4 row row-cols-1 mt-5" style="margin-left: 13px;">
    <?php foreach($datas as $data) :?>
    <div class="col " >
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                          <tbody>
                            <tr>
                              <th scope="col">Name</th>
                              <td><?= $data["name"];?></td>
                            </tr>

                            <tr>
                            <th scope="col">Gender</th>
                              <td><?= $data["gender"];?></td>
                            </tr>

                            <tr>
                            <th scope="col">City</th>
                              <td><?= $data["city"];?></td>
                            </tr>

                          </tbody>
                        </table>
              </div>
            </div>
    <?php endforeach; ?>
  </div>


  <p class="text-center"><a href="export.php" target="_blank">Export To Excel</a></p>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
