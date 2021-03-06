<?php
    session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KaandDy</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Form---Wizard.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/MUSA_timeline.css">
    <link rel="stylesheet" href="assets/css/Navbar-Fixed-Side.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container">
            <a class="navbar-brand" href="login"><img heigth="20px" width="100px" src="assets/img/KaandDy.png" alt="KaandDy"></a>
            <?php
            if(isset($_SESSION['USER'])) {
                echo '<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="">Trade</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="liked">Favs</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="chat">Chat</a></li>';
                    if($_SESSION['type'] == 'ADMIN') {
                        echo '<li class="nav-item" role="presentation"><a class="nav-link" href="admin">Admin</a></li>';
                    }
                echo '</ul>
                <form action="products" class="form-inline mr-auto">
                    <div class="form-group">
                        <label for="search-field"><i class="fa fa-search"></i></label>
                        <input class="form-control search-field" type="search" name="search" id="search-field">
                    </div>
                </form>
                <a class="btn btn-link" role="button" href="cart"><i class="fa fa-shopping-cart"> </i></a>
                &nbsp;
                <a class="btn btn-light action-button" role="button" href="logout">'.$_SESSION['USER'].' <i class="fas fa-sign-out-alt"></i></a>
            </div>';
            }
            ?>
        </div>
    </nav>
</body>
</html>