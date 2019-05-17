$(document).ready(function(){
    $('.chat').scrollTop(Number.MAX_SAFE_INTEGER);
    $('.chat-user1').scrollTop(Number.MAX_SAFE_INTEGER);
    $('.chat-user2').scrollTop(Number.MAX_SAFE_INTEGER);
    $('.chat-user3').scrollTop(Number.MAX_SAFE_INTEGER);
});

$('#send-1').click(function(){
    $('.begin-1').before('<article class="timeline-entry"><div class="timeline-entry-inner">'
        + '<time class="timeline-time" datetime="2014-01-10T03:45"><span>07:25 PM</span>'
        + '<span>Today</span></time><div class="timeline-icon  bg-info"><i class="entypo-camera">'
        + '</i></div><div class="timeline-label"><p>' + $('#message-1').val()
        + '</p></div></div></article>');
    $('#message-1').val('');
});

$('#send-2').click(function(){
    $('.begin-2').before('<article class="timeline-entry"><div class="timeline-entry-inner">'
        + '<time class="timeline-time" datetime="2014-01-10T03:45"><span>07:25 PM</span>'
        + '<span>Today</span></time><div class="timeline-icon  bg-info"><i class="entypo-camera">'
        + '</i></div><div class="timeline-label"><p>' + $('#message-2').val()
        + '</p></div></div></article>');
    $('#message-2').val('');
});

$('#send-3').click(function(){
    $('.begin-3').before('<article class="timeline-entry"><div class="timeline-entry-inner">'
        + '<time class="timeline-time" datetime="2014-01-10T03:45"><span>07:25 PM</span>'
        + '<span>Today</span></time><div class="timeline-icon  bg-info"><i class="entypo-camera">'
        + '</i></div><div class="timeline-label"><p>' + $('#message-3').val()
        + '</p></div></div></article>');
    $('#message-3').val('');
});