<?php

//samb ke db
include '../connect_db.php';

//get id value
$id = $_GET['id'];

//delete entry
$result = mysql_query("DELETE FROM `buku`.`tajuk` WHERE `tajuk`.`id`") or die (mysql_error('cant execute'));

//lps delete,redirect to page

header ("Location: ../utama.php");

?>
