<?php
    if (isset($_GET['response'])) {
        if($_GET['response'] == 'error') {
            echo '<script>alert("Something unexpected ocurred");</script>';
        } else if($_GET['response'] == 'erroruser') {
            echo '<script>alert("This username isn\'t available");</script>';
        } else if($_GET['response'] == 'errormail') {
            echo '<script>alert("An account with this email already exists");</script>';
        } else if($_GET['response'] == 'errorpass') {
            echo '<script>alert("The passwords doesn\'t match");</script>';
        } else {
            echo '<script>alert("The account was created successfully");</script>';
            header('Location: login');
        }
    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KaandDy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
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
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="POST" action="insertUsers">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="user" placeholder="¤ User" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="¤ Email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="¤ Password" required>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="confirmpass" placeholder="¤ Confirm password" required>
                </div>
                <div class="form-group">
                    <small class="text-muted">Fields with ¤ are required</small>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" required>I agree to the license terms.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Sign Up</button>
                </div>
                <a href="login" class="already">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    require 'footer.php';
?>