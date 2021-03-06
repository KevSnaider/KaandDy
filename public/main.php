<?php
    require 'header.php';
    require 'connect.php';

    if(!isset($_SESSION['USER'])) {
        header('Location: index');
    }

    if(isset($_POST['send'])) {
        $user = $_SESSION['USER'];
        $sql = "INSERT INTO user_responses(ure_question, ure_response, ure_use_id) VALUES
        ('".$_POST['question1']."', '".$_POST['answer1']."', (SELECT use_id FROM users WHERE use_login LIKE '".$user."')),
        ('".$_POST['question2']."', '".$_POST['answer2']."', (SELECT use_id FROM users WHERE use_login LIKE '".$user."')),
        ('".$_POST['question3']."', '".$_POST['answer3']."', (SELECT use_id FROM users WHERE use_login LIKE '".$user."')),
        ('".$_POST['question4']."', '".$_POST['answer4']."', (SELECT use_id FROM users WHERE use_login LIKE '".$user."'));";
        $result = $conn->prepare($sql);
        $result->execute();
        $conn->close();
        $conn = new mysqli($servername, $username, $password, $dbname);
    }
?>

<html>
<head>
</head>
<body>
<?php
    $sql2 = "SELECT COUNT(*) AS counter FROM user_responses WHERE ure_use_id = (SELECT use_id FROM users WHERE use_login LIKE '".$_SESSION['USER']."');";
    $result2 = $conn->query($sql2);
    if($result2->num_rows > 0){ $row = $result2->fetch_assoc();}
    if($row['counter'] == 0) {
        echo '<div id="content" class="content-wrap">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <section class="widget">
                    <header>
                        <h5>Tell us about you!</h5>
                        <div class="widget-body">
                            <div class="row">
                                <h1>&nbsp;</h1>
                            </div>
                            <div class="col-lg-10">
                                <div id="wizard" class="form-wizard">
                                    <ul class="nav-justified mb-sm nav nav-pills">
                                        <li class="nav-item">
                                            <a href="#tab-1" class="nav-link active" data-toggle="tab">1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-2" class="nav-link disabled" data-toggle="tab">2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-3" class="nav-link disabled" data-toggle="tab">3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-4" class="nav-link disabled" data-toggle="tab">4</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                                            <p>Inter or AMD?</p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div id="pref-1-a" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Intel-logo.svg" alt="Intel">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Intel</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-1-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD">
                                                        <div class="card-body">
                                                            <h5 class="card-title">AMD</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-2">
                                            <p>AMD or Nvidia?</p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div id="pref-2-a" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD">
                                                        <div class="card-body">
                                                            <h5 class="card-title">AMD</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-2-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/2/21/Nvidia_logo.svg" alt="Nvidia">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Nvidia</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-3">
                                            <p>PC or laptop?</p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div id="pref-3-a" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/d/d7/Desktop_computer_clipart_-_Yellow_theme.svg" alt="PC">
                                                        <div class="card-body">
                                                            <h5 class="card-title">PC</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-3-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Lenovo_G500s_laptop-2905.jpg" alt="Laptop">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Laptop</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="tab-4">
                                            <p>Professional or Gaming?</p>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div id="pref-4-a" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://store.hp.com/SpainStore/Html/Merch/Images/c06085927_500x367.jpg" alt="Professional">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Professional</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-4-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Gaming_PC_set_up.jpg" alt="Gaming">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Gaming</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row"><br></div>
                                            <div class="row">
                                                <div class="col-lg-9"></div>
                                                <div class="col-lg-2">
                                                    <button type="submit" class="btn btn-outline-succes disabled" name="send" form="sendAnswers">Send asnwers</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div id="col-lg-12">
                                                    <form method="POST" action="" id="sendAnswers">
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" name="question1" id="question1">
                                                            <input type="hidden" class="form-control" name="answer1" id="answer1">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" name="question2" id="question2">
                                                            <input type="hidden" class="form-control" name="answer2" id="answer2">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" name="question3" id="question3">
                                                            <input type="hidden" class="form-control" name="answer3" id="answer3">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" class="form-control" name="question4" id="question4">
                                                            <input type="hidden" class="form-control" name="answer4" id="answer4">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </section>
            </div>
        </div>
    </div>';
    } else {
        $conn->close();
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT pro_id, pro_name, pro_descri, pro_image, pro_price, (CASE WHEN pro_status = 'D' THEN 'Available' WHEN pro_status = 'R' THEN 'Reserved' ELSE 'Sold' END) AS pro_status FROM productos WHERE pro_price != '' AND pro_cat_id IN(SELECT cat_id FROM categorias WHERE cat_id BETWEEN 75 AND 100);";
        $result = $conn->prepare($sql);
        $result->execute();
        $result->bind_result($id, $name, $descri, $image, $price, $status);
        echo '<section>
        <div class="container">
            <h1>Recommended</h1><hr>';
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
            
            echo'</div>
    </section>';
    }
    $conn->close();
?>
<script type="text/javascript">
    document.getElementsByClassName('photo-card')[0].style.display = '';
</script>
</body>
</html>

<?php
    require 'footer.php';
?>