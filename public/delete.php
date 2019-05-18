<?php
	require 'connect.php';
    session_start();

    if ($_SESSION['type'] != 'ADMIN') {
        header('Location: login');
	}
	
	if (isset($_GET['type'])) {
		if ($_GET['type'] == 'product') {
			$sql = "DELETE FROM productos WHERE pro_id = ".$_GET['id'].";";
			$result = $conn->prepare($sql);
			$result->execute();
			$conn->close();
			echo '<script>alert("Product deleted successfully");</script>';
			header('Location: admin');
		}
	}
?>