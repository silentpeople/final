<?php
mysql_connect('localhost', 'root', '');//ini utk defaulr connection
mysql_select_db('buku');//ini nama database

//di bwh ni utk declaration variable
//var '$' adalah declaration yg berada di dlm db
//'$_POST'pula yg terletak pd kotak input yg tlh dibuat
//thus $nama_dlm_db = $_POST nama yg di set di kotak input
$tajuk_buku = $_POST['buku'];
$pengarang = $_POST['pengarang'];
//pilih database
//sql command
//dh mula process slps data passing
$sql = "INSERT INTO `buku`.`tajuk` (
`id` ,
`tajuk_buku` ,
`pengarang`
)
VALUES (
NULL , '$tajuk_buku', '$pengarang'
)";
//$result untuk run query/filter data
$result = mysql_query($sql);

//dalam add into db xde rowcheck 
//beza dgn compare database... 

if($result == true) 
header('Location: ../utama.php');

	//{header("Location: ../utama.php");//ke mna slps pergi data sudah berjaya di masukkan
  
if($result == false) echo 'failed';

?>
