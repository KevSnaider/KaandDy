<?php
    require 'header.php';
?>

<html>
<head>
</head>
<body>
    <!--if the count(*) in the select is less than 4 then print this-->
    <div id="content" class="content-wrap">
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
                                                    <button type="button" class="btn btn-outline-succes disabled" onclick="sendAnswers();">Send asnwers</button>
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
    <script type="text/javascript">
        var answers = new Array;

        function setSelected(option) {
            var pref = option.getAttribute("id");
            var actual =option.parentNode.parentNode.parentNode;
            var next = actual.nextElementSibling;
            var quest = option.parentNode.parentNode.previousElementSibling.childNodes[0].textContent;
            var ans = option.childNodes[3].childNodes[1].childNodes[0].textContent;

            if(pref.startsWith('pref-1')) {
                answers['question1'] = {'question': quest, 'answer': ans};
                var li = document.getElementsByClassName('nav-link active')[1];
                li.setAttribute('class', 'nav-link disabled');
                var nxtLi = document.getElementsByClassName('nav-link disabled')[1];
                nxtLi.setAttribute('class', 'nav-link active');
                actual.setAttribute('class', 'tab-pane');
                next.setAttribute('class', 'tab-pane active');

            } else if (pref.startsWith('pref-2')) {
                answers['question2'] = {'question': quest, 'answer': ans};
                var li = document.getElementsByClassName('nav-link active')[1];
                li.setAttribute('class', 'nav-link disabled');
                var nxtLi = document.getElementsByClassName('nav-link disabled')[2];
                nxtLi.setAttribute('class', 'nav-link active');
                actual.setAttribute('class', 'tab-pane');
                next.setAttribute('class', 'tab-pane active');

            } else if (pref.startsWith('pref-3')) {
                answers['question3'] = {'question': quest, 'answer': ans};
                var li = document.getElementsByClassName('nav-link active')[1];
                li.setAttribute('class', 'nav-link disabled');
                var nxtLi = document.getElementsByClassName('nav-link disabled')[3];
                nxtLi.setAttribute('class', 'nav-link active');
                actual.setAttribute('class', 'tab-pane');
                next.setAttribute('class', 'tab-pane active');

            } else if (pref.startsWith('pref-4')) {
                answers['question4'] = {'question': quest, 'answer': ans};
                document.getElementsByClassName('btn btn-outline-succes disabled')[0].setAttribute('class', 'btn btn-outline-success');
            }
        }

        function sendAswers() {
            //add code to send via POST the aswers data with jQuery
        }
    </script>
</body>
</html>

<?php
    require 'footer.php';
?>