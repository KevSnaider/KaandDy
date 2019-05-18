$('#prem').click(function() {
    $(this).parent().parent().parent().parent().parent().animate({
        opacity: 0, // animate slideUp
        marginLeft: '-200px'
    }, 'slow', 'linear', function() {
        $(this).remove();
        document.getElementsByClassName('photo-card')[0].style.display = '';
    });
});

$('#pfav').click(function() {
    $(this).parent().parent().parent().parent().parent().animate({
        opacity: 0, // animate slideUp
        marginRight: '-200px'
    }, 'slow', 'linear', function() {
        $(this).remove();
        document.getElementsByClassName('photo-card')[0].style.display = '';
    });
});

$('#pshop').click(function() {
    $(this).parent().parent().parent().parent().parent().animate({
        opacity: 0 // animate slideUp
    }, 'slow', 'linear', function() {
        $(this).remove();
        document.getElementsByClassName('photo-card')[0].style.display = '';
    });
});