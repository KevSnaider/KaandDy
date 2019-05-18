<?php
    require 'connect.php';
    session_start();

    if ($_SESSION['type'] != 'ADMIN') {
        header('Location: login');
    }

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $descri = $_POST['descri'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $cat_id = $_POST['category'];
        $seller = $_POST['seller'];
        $status = $_POST['status'];

        $sql = "INSERT INTO productos(pro_name, pro_descri, pro_image, pro_price, pro_cat_id, pro_seller, pro_status) VALUES ('?', '?', '?', '?', ?, ?, '?');";
        $result = $conn->prepare($sql);
        $result->bind_param('ssssiis', $name, $descri, $image, $price, $cat_id, $seller, $status);
        $result->execute();
        $conn->close();
    }
    echo '<script>alert("Product inserted successfully");</script>';
    header('Location: admin');
?>