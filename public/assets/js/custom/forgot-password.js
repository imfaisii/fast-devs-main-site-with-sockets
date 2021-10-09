$(function() {
    One.helpers('notify');
});

$(".btn-alt-success").click(function (e) { 
    e.preventDefault();
    if($("#password-reset-form").valid()){
        One.helpers('notify', {type: 'info', icon: 'fa fa-info-circle mr-1', message: 'Please wait for server response....'});
        $("#password-reset-form").submit();
    }
});