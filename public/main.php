<?php
    require 'header.php';
?>

<html>
<head>
</head>
<body>
    <div id="content" class="content-wrap">
        <h1 class="page-title">Main page</h1>
        <div class="row">
            <div class="col-lg-8">
                <section class="widget">
                    <header style="height:400px;">
                        <h5>Tell us about you!</h5>
                        <div class="widget-controls">
                            <i class="fas fa-window-close" adata-widgster="close" title="Close"></i>
                        </div>
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
                                            <a href="#tab-2" class="nav-link" data-toggle="tab">2</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-3" class="nav-link" data-toggle="tab">3</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-4" class="nav-link" data-toggle="tab">4</a>
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
                                                    <div id="pref-2-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD">
                                                        <div class="card-body">
                                                            <h5 class="card-title">AMD</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-2-a" class="card" style="width: 18rem;" onclick="setSelected(this);">
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
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="Laptop">
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
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/c/c9/Intel-logo.svg" alt="Intel">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Intel</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div id="pref-4-b" class="card" style="width: 18rem;" onclick="setSelected(this);">
                                                        <img class="card-img-top" height="189.469" width="286" src="https://upload.wikimedia.org/wikipedia/commons/7/7c/AMD_Logo.svg" alt="AMD">
                                                        <div class="card-body">
                                                            <h5 class="card-title">AMD</h5>
                                                        </div>
                                                    </div>
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
    </div>
</body>
</html>

<?php
    require 'footer.php';
?>