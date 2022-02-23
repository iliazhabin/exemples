<?php
	$mysqli = mysqli_connect("");
	$res = $mysqli->query('SELECT * FROM users;');
	echo"<h1>Учебный Сайт.Обратная форма</h1>";
	echo"<h5>(Данные вымышленны,поэтому вход без пароля)</h5>";
	echo "<table width='70%' border='1'>";
	echo "<tr><th>"."id"."</th>";
	echo "<th>"."name"."</th>";
	echo "<th>"."email"."</th>";
	echo "<th>"."inputState"."</th>";
	echo "<th>"."inputState2"."</th></tr>";
	for ($row_no = 0; $row_no <= $res->num_rows -1; $row_no++) { 
		$res -> data_seek($row_no);
		$row = $res -> fetch_assoc();

		echo "<tr><td>".$row['id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['inputState']."</td>";
		echo "<td>".$row['inputState2']."</td></tr>";
		
	}
	echo "</table>";
?>