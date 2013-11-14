<html>
<title>ApoGee Assignment</title>
<link rel="stylesheet" href="../css/index.css"/>
<body>
<div id="menu">
<div align="left">
<?php
include '../widgets/date_time.php';
?>
</div>
</div>
<div id="menu">
<?php 
include '../page/menu.php';//element menu dlm website
?>
</div>
<div id="container">
<div align="center">
<h1>Tambah Buku</h1>
<br><br>
<form action="add_book_pro.php" method="post">
Tajuk Buku : <input type="" name="buku" >
<br><br>
Nama Pengarang : <input type="" name="pengarang">
<br><br>

<input type="submit" name="Hantar" value="Submit">
</form>
</div>
</div>
<br><br>

</body>
