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
                            <div class="col-md-10 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Card Name</strong></p>
                            </div>
                            <div class="col-md-10 offset-md-1"><input class="form-control" type="text" name="name" required="" placeholder="Card Name" maxlength="50" style="margin-left:0px;font-family:Roboto, sans-serif;"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-10 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Card Number</strong></p>
                            </div>
                            <div class="col-md-10 col-lg-10 offset-md-1" style="font-family:Roboto, sans-serif;"><input class="form-control" type="tel" name="card-number" required="" placeholder="Card Number" maxlength="16" minlength="16" pattern="[0-9]{16}"></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-10 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;"><strong>Expiration Date</strong></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-5 col-lg-5 offset-md-1 offset-lg-1">
                                <div class="form-group"><select class="form-control"><option value="1" selected="">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><label></label></div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-5 col-lg-5"><select class="form-control"><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option></select></div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-md-10 col-lg-10 offset-md-1">
                                <p style="margin-left:2%;font-family:Roboto, sans-serif;font-size:24px;">Billing Address</p>
                            </div>
                            <div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <div class="form-group"><select class="form-control"><option value="1" selected="">Shipping Addresses</option><option value="---">List Item</option></select><label></label></div>
                            </div>
                        </div>
                        <div class="form-row" style="margin-right:0px;margin-left:0px;padding-top:24px;">
                            <div class="col-12 col-md-5 col-lg-4 offset-md-3 offset-lg-4"><button class="btn btn-outline-danger btn-lg" type="button" style="font-family:Roboto, sans-serif;">Back</button><button class="btn btn-outline-success btn-lg" type="submit" style="margin-left:16px;">Submit </button></div>
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