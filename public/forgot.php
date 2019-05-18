<?php
    require 'connect.php';

    if(isset($_POST['forgot'])) {
        if (isset($_POST['email'])) {
            $selectM = "SELECT COUNT(*) FROM users WHERE use_mail=?;";
            $resultM = $conn->prepare($selectM);
            $resultM->bind_param("s", $_POST['email']);
            $resultM->execute();
            $resultM->bind_result($mailM);
            $resultM->fetch();
            $conn->close();

            if($mailM >= 1) {
                $conn =  new mysqli($servername, $username, $password, $dbname);
                $select = "SELECT use_login FROM users WHERE use_mail=?;";
                $result = $conn->prepare($select);
                $result->bind_param("s", $_POST['email']);
                $result->execute();
                $result->bind_result($user);
                $result->fetch();
                $conn->close();

                $conn = new mysqli($servername, $username, $password, $dbname);
                $update = "UPDATE users SET use_pass = '".md5('kaanddy', false)."' WHERE use_login=?;";
                $updater = $conn->prepare($update);
                $updater->bind_param("s", $user);
                $updater->execute();
                $conn->close();
                
                $to = $_POST['email'];
            } else {
                $alert = "This email isn't in our databases";
            }

            $subject = 'Password reset';
            $message = 'Dear '.$user.',<br>We reset your password as you ask us.<br>Your temporary password is: kaanddy<br><br>If you do\'t request it please contact with us';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= 'From: kaanddy@kaanddy.es' . "\r\n";
            $headers .= 'X-Mailer: PHP/' . phpversion();
    
            mail($to, $subject, $message, $headers);
        } else if (isset($_POST['user'])) {
            $conn =  new mysqli($servername, $username, $password, $dbname);
            $selectL = "SELECT COUNT(*) FROM users WHERE use_login=?;";
            $resultL = $conn->prepare($selectL);
            $resultL->bind_param("s", $_POST['user']);
            $resultL->execute();
            $resultL->bind_result($mailL);
            $resultL->fetch();
            $conn->close();
            
            if($mailM >= 1) {
                $conn =  new mysqli($servername, $username, $password, $dbname);
                $select = "SELECT use_mail FROM users WHERE use_login=?;";
                $result = $conn->prepare($select);
                $result->bind_param("s", $_POST['user']);
                $result->execute();
                $result->bind_result($mail);
                $result->fetch();
                $conn->close();

                $conn = new mysqli($servername, $username, $password, $dbname);
                $update = "UPDATE users SET use_pass = '".md5('kaanddy', false)."' WHERE use_login=?;";
                $updater = $conn->prepare($update);
                $updater->bind_param("s", $_POST['user']);
                $updater->execute();
                $conn->close();

                $to = $mail;
            } else {
                $alert = "This user isn't in our databases";
            }

            $subject = 'Password reset';
            $message = 'Dear '.$_POST['user'].',<br>We reset your password as you ask us.<br>Your temporary password is: kaanddy<br><br>If you do\'t request it please contact with us';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
            $headers .= 'From: kaanddy@kaanddy.es' . "\r\n";
            $headers .= 'X-Mailer: PHP/' . phpversion();
    
            mail($to, $subject, $message, $headers);
        } else {
            $alert = "Please, give us your user or email";
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
            <form method="post">
                <h2 class="text-center">Forgot your user or password?</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="user" placeholder="User">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <small class="text-muted">Put your user or email to reset your password</small>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="forgot">Send</button>
                    <a href="login" class="btn btn-secondary btn-block">Back</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>
</html>