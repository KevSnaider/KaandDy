<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		html {
			background-color: #4B088A;
		}
	</style>
</head>
<body>
	<?php
		require 'connect.php';
		$sql = "DELETE FROM users WHERE user_id = ".$_GET['userID'].";";
		$result = $conn->query($sql);
		mysqli_close($conn);
		header('Refresh: 0; URL = index.php');
	?>
</body>
</html>