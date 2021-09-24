
<?php
session_start();
$con = mysqli_connect("localhost","ussername","password","dbname");

if(isset($_POST['save_web'])) { 
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomortelepon = $_POST['nomortelepon'];
    $namausaha = $_POST['namausaha'];
    $bidangusaha = $_POST['bidangusaha'];
    $deskripsiusaha = $_POST['deskripsiusaha'];
    $gender = implode(', ',$_POST['gender']);
    $usia = $_POST['usia']; 
    $demografi = implode(', ',$_POST['demografi']);
    $geografis = implode(', ',$_POST['geografis']);
    $targetgender = implode(', ',$_POST['targetgender']);
    $promosi = $_POST['promosi'];
    $referensiweb = $_POST['referensiweb'];
    $warnaweb = $_POST['warnaweb'];
    $jenispaket = $_POST['jenispaket'];
    $emailweb = $_POST['emailweb'];
    $passwordweb = $_POST['passwordweb'];
    $nomorcta = $_POST['nomorcta'];
    foreach($_FILES['logo']['name'] as $key => $val) {
        $rand = rand('11111111','99999999');
        $logo = $rand. '_'.$val;
        move_uploaded_file($_FILES['logo']['tmp_name'][$key],'lampiran-logo-web/'.$logo);
	}

    foreach($_FILES['lampiranfoto']['name'] as $key => $val) {
        $rand = rand('11111111','99999999');
        $lampiranfoto = $rand. '_'.$val;
        move_uploaded_file($_FILES['lampiranfoto']['tmp_name'][$key],'lampiran-foto-produk-web/'.$lampiranfoto);
	}

    foreach($_FILES['lampiranbukti']['name'] as $key => $val) {
        $rand = rand('11111111','99999999');
        $lampiranbukti = $rand. '_'.$val;
        move_uploaded_file($_FILES['lampiranbukti']['tmp_name'][$key],'lampiran-testimoni-web/'.$lampiranbukti);
	}

    foreach($_FILES['lampiranlainnya']['name'] as $key => $val) {
        $rand = rand('11111111','99999999');
        $lampiranlainnya = $rand. '_'.$val;
        move_uploaded_file($_FILES['lampiranlainnya']['tmp_name'][$key],'lampiran-lainnya-web/'.$lampiranlainnya);
	}

    $tanggal = date("Y-m-d H:i:s");
    $linklogo = $_POST['linklogo'];
    $linklampiranfoto = $_POST['linklampiranfoto'];
    $linklampiranbukti = $_POST['linklampiranbukti'];
    $linklampiranlainnya = $_POST['linklampiranlainnya']; 




    $query = "INSERT INTO yourtable (nama,email,alamat,nomortelepon,namausaha, bidangusaha,deskripsiusaha,gender,usia,demografi,geografis ,targetgender,promosi, referensiweb, warnaweb, jenispaket, emailweb, passwordweb, nomorcta, logo, lampiranfoto,lampiranbukti,lampiranlainnya, tanggal, linklogo, linklampiranfoto, linklampiranbukti, linklampiranlainnya) VALUES ('$nama', '$email','$alamat','$nomortelepon', '$namausaha','$bidangusaha', '$deskripsiusaha','$gender', '$usia','$demografi', '$geografis', '$targetgender', '$promosi', '$referensiweb', '$warnaweb', '$jenispaket','$emailweb','$passwordweb','$nomorcta','$logo','$lampiranfoto','$lampiranbukti', '$lampiranlainnya', '$tanggal', '$linklogo', '$linklampiranfoto', '$linklampiranbukti', '$linklampiranlainnya')";
    $query_run = mysqli_query($con, $query); 

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: ------>>> ");
    } 
    else{
        $_SESSION['status'] = "Failed to Insert into database";
        header("Location: ------>>>?");
    }
}
?> 