var answers = new Array;

function setSelected(option) {
    var pref = option.getAttribute("id");
    var actual =option.parentNode.parentNode.parentNode;
    var next = actual.nextElementSibling;
    var quest = option.parentNode.parentNode.previousElementSibling.childNodes[0].textContent;
    var ans = option.childNodes[3].childNodes[1].childNodes[0].textContent;

    if(pref.startsWith('pref-1')) {
        document.getElementById('question1').setAttribute('value', quest);
        document.getElementById('answer1').setAttribute('value', ans);
        var li = document.getElementsByClassName('nav-link active')[1];
        li.setAttribute('class', 'nav-link disabled');
        var nxtLi = document.getElementsByClassName('nav-link disabled')[1];
        nxtLi.setAttribute('class', 'nav-link active');
        actual.setAttribute('class', 'tab-pane');
        next.setAttribute('class', 'tab-pane active');

    } else if (pref.startsWith('pref-2')) {
        document.getElementById('question2').setAttribute('value', quest);
        document.getElementById('answer2').setAttribute('value', ans);
        var li = document.getElementsByClassName('nav-link active')[1];
        li.setAttribute('class', 'nav-link disabled');
        var nxtLi = document.getElementsByClassName('nav-link disabled')[2];
        nxtLi.setAttribute('class', 'nav-link active');
        actual.setAttribute('class', 'tab-pane');
        next.setAttribute('class', 'tab-pane active');

    } else if (pref.startsWith('pref-3')) {
        document.getElementById('question3').setAttribute('value', quest);
        document.getElementById('answer3').setAttribute('value', ans);
        var li = document.getElementsByClassName('nav-link active')[1];
        li.setAttribute('class', 'nav-link disabled');
        var nxtLi = document.getElementsByClassName('nav-link disabled')[3];
        nxtLi.setAttribute('class', 'nav-link active');
        actual.setAttribute('class', 'tab-pane');
        next.setAttribute('class', 'tab-pane active');

    } else if (pref.startsWith('pref-4')) {
        document.getElementById('question4').setAttribute('value', quest);
        document.getElementById('answer4').setAttribute('value', ans);
        document.getElementsByClassName('btn btn-outline-succes disabled')[0].setAttribute('class', 'btn btn-outline-success');
    }
}