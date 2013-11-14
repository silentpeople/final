<?php
//samb ke db
include '../connect_db.php';

//pilih table utk dilihat dan command
$run = "SELECT * FROM tajuk ";
	$query = mysql_query($run) or die ('cant execute');
	

	
	$rowcheck = mysql_num_rows($query);
	
	if ($rowcheck =($query) ){
	
	echo '<table border = "1" bgcolor ="green" cellpadding = "1" cellspacing = "1">
	
	<th> Log ID </th>
	<th> Tajuk Buku </th>
	<th> Pengarang </th>
	<th> Action </th>
	';
	while ($row = mysql_fetch_array($query))
	{
		$id = $row[0];
		$tajuk_buku = $row[1];
		$pengarang = $row[2];
		
		
	}
		echo '
		
		<tr>
		
	
		<td bgcolor = "white">'.$id.'</td>
		<td bgcolor = "white">'.$tajuk_buku.'</td>
		<td bgcolor = "white">'.$pengarang.'</td>
		<td bgcolor="white"><a href="">update</a> / <a href="../page/delete_book.php">delete</a></td>
	
		
		</tr>
		
		';
	
	
	
	}
	?>
