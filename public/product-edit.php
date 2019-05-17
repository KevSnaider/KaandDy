<?php
    require 'header.php';
    if(isset($_GET['id'])) {
        $sql = "SELECT * FROM productos WHERE pro_id = ".$_GET['id'].";";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            $row = $result->fetch_row();
        }
    } else {
        $row = ['pro_id'=>'', 'por_name'=>'', 'pro_descri'=>'', 'pro_image'=>'', 'pro_price'=>'', 'pro_cat'=>'', ''=>'', ''=>''];
    }
?>
<html>
<head>
</head>
<body>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">Ã</span>
                </button>
                <span>Profile save with success</span>
                </div>
            </div>
        </div>
        <h1>Product</h1>
        <hr>
        <form>
            <div class="form-row profile-row">
                <div class="col-md-4 align-self-center relative">
                    <div class="avatar">
                        <div class="border rounded-0 avatar-bg center"></div>
                    </div>
                    <input type="text" name="avatar-file" class="form-control"></div>
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="firstname">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" name="descri"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price" step="0.01">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-md-6 col-lg-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="12" selected>This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>