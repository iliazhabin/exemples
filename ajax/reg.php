<?php
	
	if (isset($_POST['name'])) { 
		
		$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
		$inputEmail4 = trim(filter_var($_POST['inputEmail4'], FILTER_SANITIZE_EMAIL));

		
	
		if(strlen($name) >= 3 && strlen($inputEmail4) >= 3 )  {
			$user = '';
			$password = '';
			$db = '';
			$host = 'localhost';

			$dsn = 'mysql:host='.$host.';dbname='.$db;
			$pdo = new PDO($dsn, $user, $password);
			$sql = 'INSERT INTO users(name, email) VALUES(?, ?)';
			$query = $pdo->prepare($sql);
			$query->execute([$name, $inputEmail4]);	
			echo 'Готово';
		}
		
	}

		if (isset($_POST['name0'])) { 
		
		$name = trim(filter_var($_POST['name0'], FILTER_SANITIZE_STRING));
		$inputEmail0 = trim(filter_var($_POST['inputEmail0'], FILTER_SANITIZE_EMAIL));
		$inputState0 = trim(filter_var($_POST['inputState0'], FILTER_SANITIZE_STRING));
		$inputState02 = trim(filter_var($_POST['inputState02'], FILTER_SANITIZE_STRING));
	
		if(strlen($name) >= 3 && strlen($inputEmail0) >= 3 )  {
			$user = '';
			$password = '';
			$db = '';
			$host = '';

			$dsn = 'mysql:host='.$host.';dbname='.$db;
			$pdo = new PDO($dsn, $user, $password);
			$sql = 'INSERT INTO users(name, email, inputState, inputState2) VALUES(?, ?, ?, ?)';
			$query = $pdo->prepare($sql);
			$query->execute([$name, $inputEmail4, $inputState, $inputState2]);	
			echo 'Готово';
		}
		
	}
	
?>
