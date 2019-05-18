<?php
    require 'header.php';
    require 'connect.php';
    $sql = "SELECT pro_id, pro_name, pro_descri, pro_image, pro_price, (CASE WHEN pro_status = 'D' THEN 'Available' WHEN pro_status = 'R' THEN 'Reserved' ELSE 'Sold' END) AS pro_status FROM productos WHERE pro_price != '';";
    $result = $conn->prepare($sql);
    $result->execute();
    $result->bind_result($id, $name, $descri, $image, $price, $status);
?>

<html>
<head>
</head>
<body>
    <section>
        <div class="container">
            <?php
                while($result->fetch()) {
                    echo '<div id="pro-'.$id.'" class="photo-card" style="display: none;">
                        <div class="photo-background" style="background-image:url(&quot;'.$image.'&quot;);"></div>
                        <div class="photo-details">
                            <h1>'.$name.'</h1>
                            <p>'.$descri.'</p>
                            <p>'.$price.' €</p>
                            <p>'.$status.'</p>
                            <div class="photo-tags">
                                <ul>
                                    <li><button id="prem" class="btn btn-dark"><i class="fas fa-ban"></i></button></li>
                                    <li><button id="pshop" class="btn btn-dark"><i class="fas fa-cart-plus"></i></button></li>
                                    <li><button id="pfav" class="btn btn-dark"><i class="fas fa-star"></i></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </section>
    <script type="text/javascript">
        document.getElementsByClassName('photo-card')[0].style.display = '';
    </script>
</body>
</html>

<?php
    require 'footer.php';
?>