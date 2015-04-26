function generateSentHtml(message){
return "<div class='row msg_container base_sent'>"+
                    "<div class='col-md-10 col-xs-10'>"+
                        "<div class='messages msg_sent'>"+
                            "<p>"+message+"</p>"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-md-2 col-xs-2 avatar'>"+
                            "<img src='http://placehold.it/50/55C1E7/fff&text=ME' alt='User Avatar'  class='img-responsive'>"+
                        "</div>"+
                    "</div>";
}
function generateReceiveHtml(message){
  return "<div class='row msg_container base_receive'>"+
                        "<div class='col-md-2 col-xs-2 avatar'>"+
                            "<img src='http://placehold.it/50/FA6F57/fff&text=Q' alt='User Avatar'  class='img-responsive'>"+
                        "</div>"+
                        "<div class='col-md-10 col-xs-10'>"+
                            "<div class='messages msg_receive'>"+
                                "<p>"+message+"</p>"+
                            "</div>"+
                        "</div>"+
                    "</div>";
}
function reply(){
  var message = "that mongodb thing looks good, huh? tiny master db, and huge document store";
   var chat_container = $(".msg_container_base");
   chat_container.append(generateReceiveHtml(message));
   chat_container.scrollTop(chat_container.prop("scrollHeight"));
}

$(document).on('click', '#btn-chat', function (e) {
    // var $this = $(this);
    var message = $(".chat_input").val();
   var chat_container = $(".msg_container_base");
   chat_container.append(generateSentHtml(message));
   chat_container.scrollTop(chat_container.prop("scrollHeight"));
   $(".chat_input").val('');
   reply();
});

$(document).on('click', '.icon_refresh', function (e) {
  var message = "that mongodb thing looks good, huh? tiny master db, and huge document store";
$(".msg_container_base").html(generateReceiveHtml(message));
});

$(document).ready(function() {
  $('.chat_input').keypress(function (e) {
    var key = e.which;
    if(key == 13)  // the enter key code
    {
      console.log("enter");
      $('#btn-chat').click();
      return false;  
    }
  });
});

