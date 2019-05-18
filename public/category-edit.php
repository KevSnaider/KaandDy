<?php
    require 'header.php';
?>

<html>
<head>
</head>
<body>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <h1>Category</h1>
        <hr>
        <form>
            <div class="form-row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="form-group"><label>Name</label><input class="form-control" type="text" name="firstname"></div>
                </div>
            </div>
            <hr>
            <div class="form-row">
                <div class="col-md-12 content-right"><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>
</html>

<?php
    require 'footer.php';
?>