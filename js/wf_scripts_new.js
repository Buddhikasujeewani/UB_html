
$("#open-chat-window").click(function () {
    alert("ffff");
    $(".open").show();
    $(this).hide();
});
jQuery("#booth-chat-single-close").click(function () {
   
    jQuery(".open").hide();
    jQuery("#open-chat-window").show();
});