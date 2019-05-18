<?php
    require 'header.php';
    require 'connect.php';
    
    if ($_SESSION['type'] != 'ADMIN') {
        header('Location: login');
    }

    $sql = "SELECT pro_id, pro_name, pro_descri, (SELECT cat_descri FROM categorias WHERE cat_id = pro_cat_id) AS pro_cat, (SELECT use_login FROM users WHERE use_id = pro_seller) AS pro_seller, (CASE WHEN pro_status = 'D' THEN 'Available' WHEN pro_status = 'R' THEN 'Reserved' ELSE 'Sold' END) AS pro_status FROM productos WHERE pro_price !='';";
    $sql .= "SELECT cat_id, cat_descri, (CASE WHEN cat_subcat = '1' THEN 'Yes' ELSE 'No' END) AS cat_subcat, (SELECT supercat.cat_descri FROM categorias AS supercat WHERE supercat.cat_id = categorias.cat_supercat_id) AS cat_supercat FROM categorias;";
    $sql .= "SELECT use_id, use_login, use_mail, (CASE WHEN use_type = 'USER' THEN 'User' ELSE 'Administrator' END) AS use_type, (CASE WHEN use_status = 'A' THEN 'Active' ELSE 'Inactive' END) AS use_status FROM users;";
    $counter = 0;
    $arrayProducts = array();
    $arrayCategories = array();
    $arrayUsers = array();

    if ($conn->multi_query($sql)) {
        do {
            /* almacenar primer juego de resultados */
            if ($result = $conn->store_result()) {
                while ($row = $result->fetch_row()) {
                    if($counter == 0) {
                        array_push($arrayProducts, [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5]]);
                    } else if($counter == 1) {
                        array_push($arrayCategories, [$row[0], $row[1], $row[2], $row[3]]);
                    } else if($counter == 2) {
                        array_push($arrayUsers, [$row[0], $row[1], $row[2], $row[3], $row[4]]);
                    }
                }
                $result->free();
            }
            /* mostrar divisor */
            if ($conn->more_results()) {
                $counter++;
            }
        } while ($conn->next_result());
    }
?>

<html>
<head>
</head>
<body>
    <div>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#products">Products</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#categories">Categories</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#users">Users</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="products">
                    <div class="row">
                        <div class="col-lg-1"><p></p></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <a href="product-edit" class="btn btn-outline-success" role="button">Create</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Short description</th>
                                    <th>Category</th>
                                    <th>Seller</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($arrayProducts as $product) {
                                        echo '<tr>
                                            <td>'.$product[1].'</td>
                                            <td>'.$product[2].'</td>
                                            <td>'.$product[3].'</td>
                                            <td>'.$product[4].'</td>
                                            <td>'.$product[5].'</td>
                                            <td>
                                                <a href="product-edit?id='.$product[0].'" class="btn btn-outline-warning" role="button">Edit</a>
                                                <span>&nbsp; &nbsp;</span>
                                                <a href="delete?type="product"&id='.$product[0].'" class="btn btn-outline-danger" role="button">Delete</a>
                                            </td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="categories">
                    <div class="row">
                        <div class="col-lg-1"><p></p></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <button class="btn btn-outline-success" type="button">Create</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Is subcategory?</th>
                                    <th>Parent category</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($arrayCategories as $category) {
                                        echo '<tr>
                                            <td>'.$category[1].'</td>
                                            <td>'.$category[2].'</td>
                                            <td>'.$category[3].'</td>
                                            <td>
                                                <button class="btn btn-outline-warning" type="button">Edit</button>
                                                <span>&nbsp; &nbsp;</span>
                                                <button class="btn btn-outline-danger" type="button">Delete</button>
                                            </td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="users">
                    <div class="row">
                        <div class="col-lg-1"><p></p></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-11">
                            <button class="btn btn-outline-success" type="button">Create</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($arrayUsers as $user) {
                                        echo '<tr>
                                            <td>'.$user[1].'</td>
                                            <td>'.$user[2].'</td>
                                            <td>'.$user[3].'</td>
                                            <td>'.$user[4].'</td>
                                            <td>
                                                <button class="btn btn-outline-warning" type="button">Edit</button>
                                                <span>&nbsp; &nbsp;</span>
                                                <button class="btn btn-outline-danger" type="button">Delete</button>
                                            </td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    require 'footer.php';
?>