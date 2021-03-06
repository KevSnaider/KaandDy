<?php
    require 'connect.php';
    session_start();

    if ($_SESSION['type'] != 'ADMIN') {
        header('Location: login');
    }

    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $descri = $_POST['descri'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $cat_id = $_POST['category'];
        $seller = $_POST['seller'];
        $status = $_POST['status'];

        $sql = "UPDATE productos SET pro_name=?, pro_descri=?, pro_image=?, pro_price=?, pro_cat_id=?, pro_seller=?, pro_status=? WHERE pro_id=?;";
        $result = $conn->prepare($sql);
        $result->bind_param('ssssiisi', $name, $descri, $image, $price, $cat_id, $seller, $status, $id);
        $result->execute();
        $conn->close();
    }
    echo '<script>alert("Product updated successfully");</script>';
    header('Location: admin');
?>