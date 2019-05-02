<?php
    require 'connect.php';
    require 'header.php';
    $sql = "SELECT * FROM users";
	$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>KaandDy</title>
</head>

<body>
    <div>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Products</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Categories</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">Users</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="tab-1">
                    <button class="btn btn-outline-success" type="button">Create</button>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>
                                        <button class="btn btn-outline-warning" type="button">Edit</button>
                                        <span>&nbsp; &nbsp;</span>
                                        <button class="btn btn-outline-danger" type="button">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <button class="btn btn-outline-success" type="button">Create</button>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>
                                        <button class="btn btn-outline-warning" type="button">Edit</button>
                                        <span>&nbsp; &nbsp;</span>
                                        <button class="btn btn-outline-danger" type="button">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    <button class="btn btn-outline-success" type="button">Create</button>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cell 1</td>
                                    <td>Cell 2</td>
                                    <td>
                                        <button class="btn btn-outline-warning" type="button">Edit</button>
                                        <span>&nbsp; &nbsp;</span>
                                        <button class="btn btn-outline-danger" type="button">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
    require 'footer.php';
?>