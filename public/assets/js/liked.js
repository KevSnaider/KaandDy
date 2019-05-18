$('#lrem').click(function() {
    $(this).parent().animate({
        opacity: 0, // animate slideUp
        marginLeft: '-200px'
    }, 'slow', 'linear', function() {
        $(this).remove();
    });
});


$('#lshop').click(function() {
    $(this).parent().animate({
        opacity: 0 // animate slideUp
    }, 'slow', 'linear', function() {
        $(this).remove();
    });
});