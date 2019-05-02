 <?php
	$servername = 'hl376.dinaserver.com';
	$username = 'laimigs';
	$password = 'spetenneser';
	$dbname = 'kaanddy';

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: ".$conn->connect_error);
	}
?> 