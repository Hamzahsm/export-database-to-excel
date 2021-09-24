
<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Database-Register-Klien-Oesman.xls");
 
// Tambahkan table
include 'databases-sales.php'; //database yang ingin di pindah ke excel
?>