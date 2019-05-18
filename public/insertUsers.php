<?php
    require 'connect.php';
    if(isset($_POST['submit'])) {
        $user = $_POST['user'];
        $mail = $_POST['email'];

        $selectU = "SELECT COUNT(*) FROM users WHERE use_login=?;";
        $resultU = $conn->prepare($selectU);
        $resultU->bind_param("s", $user);
        $resultU->execute();
        $resultU->bind_result($counterU);
        $resultU->fetch();
        $conn->close();
        $conn = new mysqli($servername, $username, $password, $dbname);

        $selectE = "SELECT COUNT(*) FROM users WHERE use_mail=?;";
        $resultE = $conn->prepare($selectE);
        $resultE->bind_param("s", $mail);
        $resultE->execute();
        $resultE->bind_result($counterE);
        $resultE->fetch();
        $conn->close();
        $conn = new mysqli($servername, $username, $password, $dbname);

        if($counterU >= 1) {
            $answer = 'erroruser';
        } else if($counterE >= 1) {
            $answer = 'errormail';
        } else if($_POST['password'] != $_POST['confirmpass']) {
            $answer = 'errorpass';
        } else {
            $pass = md5(hash('sha256', $_POST['password'], false), false);
            $sql = "INSERT INTO users(use_login, use_mail, use_pass, use_type, use_status) VALUES ('".$user."', '".$mail."', '".$pass."', 'USER', 'A');";
            $result = $conn->prepare($sql);
            $result->execute();
            $answer = 'ok';
        }
        header('Location: signin?response='.$answer);
    } else {
        header('Location: signin?response=error');
    }
?>