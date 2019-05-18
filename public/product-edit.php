<?php
    require 'header.php';
    require 'connect.php';
    
    if ($_SESSION['type'] != 'ADMIN') {
        header('Location: login');
    }
    
    if(isset($_GET['id'])) {
        $sql = "SELECT * FROM productos WHERE pro_id = ".$_GET['id'].";";
        $result = $conn->prepare($sql);
        $result->execute();
        $result->bind_result($id, $name, $descri, $image, $price, $cat, $seller, $status);
        
        while($result->fetch()) {
            $row = ['pro_id'=>$id, 'pro_name'=>$name, 'pro_descri'=>$descri, 'pro_image'=>$image, 'pro_price'=>$price, 'pro_cat'=>$cat, 'pro_seller'=>$seller, 'pro_status'=>$status];
        }
        $conn->close();
    } else {
        $row = ['pro_id'=>'', 'pro_name'=>'', 'pro_descri'=>'', 'pro_image'=>'', 'pro_price'=>'', 'pro_cat'=>'', 'pro_seller'=>'', 'pro_status'=>''];
    }
?>

<html>
<head>
</head>
<body>
    <div class="container profile profile-view" id="product">
        <?php
            if(isset($_GET['id'])) {
                echo '<h1>Product '.$row['pro_id'].'</h1>
                <hr>
                <form method="POST" action="update">';
            } else {
                echo '<h1>New product</h1>
                <hr>
                <form method="POST" action="insertProduct">';
            }
        ?>
            <div class="form-row profile-row">
                <div class="col-md-4 align-self-center relative">
                    <label>Image</label>
                    <div class="avatar">
                        <div class="border rounded-0 avatar-bg center">
                            <?php
                                if(isset($_GET['id'])) {
                                    echo '<img src="'.$row['pro_image'].'" height="200" width="200">';
                                }
                            ?>
                        </div>
                    </div><br>
                    <input type="text" name="image" class="form-control" value ="<?php echo $row['pro_image']; ?>">
                </div>
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $row['pro_name'];?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="descri"><?php echo trim($row['pro_descri']);?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price" value="<?php echo trim($row['pro_price']);?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <?php
                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        $cats = "SELECT cat_id, cat_descri FROM categorias;";
                                        $catrows = $conn->prepare($cats);
                                        $catrows->execute();
                                        $catrows->bind_result($cat_id, $cat_descri);
                                        
                                        while($catrows->fetch()) {
                                            if($row['pro_cat'] == $cat_id) {
                                                echo '<option value="'.$cat_id.'" selected>'.$cat_descri.'</option>';
                                            } else {
                                                echo '<option value="'.$cat_id.'">'.$cat_descri.'</option>';
                                            }
                                        }
                                        $conn->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <?php
                                        $status = ['D'=>'Available', 'V'=>'Sold', 'R'=>'Reserved'];
                                        foreach ($status as $key => $value) {
                                            if($row['pro_status'] == $key) {
                                                echo '<option value="'.$key.'" selected>'.$value.'</option>';
                                            } else {
                                                echo '<option value="'.$key.'">'.$value.'</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right">
                            <input class="form-control" type="hidden" name="seller" value="<?php echo trim($row['pro_seller']);?>">
                            <input class="form-control" type="hidden" name="id" value="<?php echo $row['pro_id'];?>">
                            <button class="btn btn-primary form-btn" type="submit" name="submit">SAVE</button>
                            <a href="admin" class="btn btn-danger form-btn" role="button">CANCEL</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    require 'footer.php';
?>