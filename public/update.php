<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        html {
            background-color: #4B088A;
        }
    </style>
  </head>
  <body>
    <?php
		require 'connect.php';
        $sql = 'UPDATE users SET name = "'.$_POST['name'].'", email = "'.$_POST['email'].'", pass = "'.$_POST['password'].'", user = "'.$_POST['user'].'", phone = "'.$_POST['phone'].'", address = "'.$_POST['address'].'" WHERE user_id = '.$_POST['userID'].';';
        $result = $conn->query($sql);
        echo '<b style="color:green; text-align:center;">Data Updated successfully</b>';
        mysqli_close($conn);
        header('Refresh: 1; URL = index.php');
    ?>
  </body>
</html>