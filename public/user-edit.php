<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ross</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <h1>User</h1>
        <hr>
        <form>
            <div class="form-row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="form-group"><label>Username</label><input class="form-control" type="text" name="firstname"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group"><label>Password</label><input class="form-control" type="password"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group"><label>Password (repeat)</label><input class="form-control" type="password"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="form-group"><label>Type</label><select class="form-control" name="category"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option></select></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="form-group"><label>Status</label><select class="form-control" name="category"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option></select></div>
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