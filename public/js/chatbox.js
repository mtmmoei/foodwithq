var selectSection = false;
var selectType = false;
var selectSubtype = false;
var selectCondition = true;
var section = 1;
var type = 2;
var subtype = 3;
var welcomeMsg = "1. เลือกตามย่าน\n"+
    "2. เลือกของคาวของหวาน\n"+
    "3. เลือกประเภทอาหาร";
var selectSectionMsg = "1. สยาม\n"+
    "2. สามย่าน\n"+
    "3. สีลม";

var person = [];
person[0] = "John";
person[1] = "Doe";
person[2] = 46;
function reply(message){
   var chat_container = $(".msg_container_base");
   var html = "<div class='row msg_container base_receive'>"+
                        "<div class='col-md-2 col-xs-2 avatar'>"+
                            "<img src='http://placehold.it/50/FA6F57/fff&text=Q' alt='User Avatar'  class='img-responsive'>"+
                        "</div>"+
                        "<div class='col-md-10 col-xs-10'>"+
                            "<div class='messages msg_receive'>"+
                                "<p>"+message+"</p>"+
                            "</div>"+
                        "</div>"+
                    "</div>";
   chat_container.append(html);
   chat_container.scrollTop(chat_container.prop("scrollHeight"));
}

function ask(message){
   var chat_container = $(".msg_container_base");
   var html = "<div class='row msg_container base_sent'>"+
                    "<div class='col-md-10 col-xs-10'>"+
                        "<div class='messages msg_sent'>"+
                            "<p>"+message+"</p>"+
                            "</div>"+
                        "</div>"+
                        "<div class='col-md-2 col-xs-2 avatar'>"+
                            "<img src='http://placehold.it/50/55C1E7/fff&text=ME' alt='User Avatar'  class='img-responsive'>"+
                        "</div>"+
                    "</div>";
   chat_container.append(html);
   chat_container.scrollTop(chat_container.prop("scrollHeight"));
}

$(document).on('click', '#btn-chat', function (e) {
    var message = $(".chat_input").val();
   ask(message);
   if(selectCondition){
    selectCondition = false;
    if(message.trim()==section){
        selectSection=true;
        reply("1");
    } else if(message.trim()==type){
        selectType=true;
        reply("2");
    } else if(message.trim()==subtype){
        selectSubtype=true;
        reply("3");
    } else {
        reply("ใส่หมายเลขมาเลย");
        selectCondition = true;
    }
   }
   $(".chat_input").val('');
});

$(document).on('click', '.icon_refresh', function (e) {
  selectCondition = true;
  $(".msg_container_base").html("");
  reply(welcomeMsg);
});

$(document).ready(function() {
    $("#chat_result").hide();
  reply(welcomeMsg);
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

