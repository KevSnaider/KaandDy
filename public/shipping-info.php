<?php
    require 'connect.php';
    require 'header.php';
    if (isset($_GET[]'id')) {
        # Add code to show the user shipping info selected
    }
?>

<html>
<head>
</head>
<body>
    <div class="container">
        <div>
            <form>
                <div class="form-group">
                    <div id="formdiv">
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Addressee</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="name" placeholder="Addressee" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">Address</p>
                            </div>
                            <div class="col-md-10 col-lg-10 offset-md-1"><input class="form-control" type="text" name="address1" placeholder="Street and number | Post office box" maxlength="60" style="margin-left:0px;font-family:Roboto, sans-serif;"><span></span></div>
                            <div class="col-md-10 col-lg-10 offset-md-1"><input class="form-control" type="text" name="address2" placeholder="Apartment | Unit | Building | Floor | etc." maxlength="60" style="margin-left:0px;font-family:Roboto, sans-serif;"><span></span></div>
                            <div class="col-md-10 col-lg-7 offset-md-1"><input class="form-control" type="text" name="address2" placeholder="City" maxlength="60" style="margin-left:0px;font-family:Roboto, sans-serif;"><span></span></div>
                            <div class="col-md-10 col-lg-3 offset-md-1 offset-lg-0" style="font-family:Roboto, sans-serif;"><input class="form-control" type="text" placeholder="Zip Code" style="margin-left:0px;"></div>
                            <div class="col-lg-5 offset-lg-1"><select class="form-control"><option value="12" selected="">State</option><option value="13">This is item 2</option><option value="14">This is item 3</option></select></div>
                            <div class="col-md-10 col-lg-5 offset-md-1 offset-lg-0"><select class="form-control"><option value="12" selected="">Country</option><option value="13">This is item 2</option><option value="14">This is item 3</option></select></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-8 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Phone</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1 offset-lg-1"><input class="form-control" type="tel" placeholder="Phone Number"><small class="text-muted">It can be used to help delivery.</small></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-4 offset-md-4 offset-lg-4"><button class="btn btn-outline-danger btn-lg" type="button" style="font-family:Roboto, sans-serif;">Back</button><button class="btn btn-outline-success btn-lg" type="submit" style="margin-left:16px;">Submit </button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    require 'footer.php';
?>