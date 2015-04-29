var condition = -1;
var section = 0;
var type = 1;
var subtype = 2;

var selectedMode;
var conditions = [];
var selectedConditions = [null,null,null];

function initQuestionData(){
  var sections = [];
  sections[0] = "สยาม";
  sections[1] = "สามย่าน";
  sections[2] = "สีลม";

  var types = [];
  types[0] = "คาว";
  types[1] = "หวาน";

  var subtypes = [];
  subtypes[0] = "ญี่ปุ่น";
  subtypes[1] = "ฝรั่ง";
  subtypes[2] = "จีน";
  subtypes[3] = "ชาบู";
  subtypes[4] = "อื่นๆ";

  conditions[section] = {
    elems : sections,
    msg : "เลือกร้านตามย่าน",
  };
  conditions[type] = {
    elems : types,
    msg : "เลือกของคาวของหวาน",
  };
  conditions[subtype] = {
    elems : subtypes,
    msg : "เลือกประเภทอาหาร",
  }

  selectedMode = condition; 

}
function generateQuestionForCondition(choices){
  var question="";
  for (var i = 0; i < choices.length; i++) {
    if(selectedConditions[i]==null){
      question += (i+1)+". "+choices[i].msg +"\n";  
    }
  };     
  if(question==""){
    return "เงื่อนไขที่เลือกครบแล้ว ถ้าอยากถามใหม่ก็กดปุ่มรีเฟรชด้านขวาบน"
  }
  return question;
}
function generateQuestion(choices){
  var question="";
  for (var i = 0; i < choices.length; i++) {
    question += (i+1)+". "+choices[i] +"\n";
  };
  
  return question;
}
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
 "<div class='col-md-10 msg'>"+
 "<div class='messages msg_sent'>"+
 "<p>"+message+"</p>"+
 "</div>"+
 "</div>"+
 "<div class='col-md-2 avatar'>"+
 "<img src='http://placehold.it/50/55C1E7/fff&text=ME' alt='User Avatar'  class='img-responsive'>"+
 "</div>"+
 "</div>";
 chat_container.append(html);
 chat_container.scrollTop(chat_container.prop("scrollHeight"));
}

$(document).on('click', '.btn_show_map', function (e) {
 // console.log($(this).attr("data-lat"));
  var myCenter=new google.maps.LatLng($(this).attr("data-lat"),$(this).attr("data-lng"));
  marker.setMap(null);
  marker=new google.maps.Marker({
    position:myCenter,
    map: map,
    draggable: false
  });  
  map.panTo(marker.getPosition());
})

$(document).on('click', '#btn-chat', function (e) {
  var message = $(".chat_input").val().trim();
  ask(message);
   //console.log(selectedMode);
  // if (message==1) {reply("อยากได้ร้านตรงไหนนนนนน");};
   if(selectedMode==condition){
    if(message>0&&message<=conditions.length){
      selectedMode = message-1;
      reply(generateQuestion(conditions[message-1].elems));
    } else {
      reply("ใส่หมายเลขมาได้เลย");
    }
  } else {

   if(selectedConditions[0]!=null&&selectedConditions[1]!=null&&selectedConditions[2]!=null){
    reply(generateQuestionForCondition(conditions));
  }
  else if(message>0&&message<=conditions[selectedMode].elems.length){
    selectedConditions[selectedMode] = conditions[selectedMode].elems[message-1];
    console.log("0 "+selectedConditions[0]);
    console.log("1 "+selectedConditions[1]);
    console.log("2 "+selectedConditions[2]);
    
    var base_url = 'http://localhost/foodwithq/public';
    $.ajax({
      type: "GET",
      url : base_url+"/showRestaurant",
      contentType: "application/json; charset=utf-8",
      data : {
        section : selectedConditions[0],
        type : selectedConditions[1],
        subtype : selectedConditions[2]
      },
      dataType : "json",
      success : function(data){
        $("#accordion").html("");
        if(data.length<=0){
          reply("ไม่มีร้านอาหารตามเงื่อนไข เลือกใหม่อีกทีนะ");
        } 
        else {
          for (var i = 0; i < data.length; i++) {
        //  console.log(data[i].resturantName);
        var html = "<div class='panel panel-default'>"+
        "<div class='panel-heading' role='tab' id='heading"+i+"'>"+
        "<h3 class='panel-title'>"+
        "<a data-toggle='collapse' data-parent='#accordion' href='#collapse"+i+"' aria-expanded='true' aria-controls='collapseOne'>"+
        "<span class='glyphicon glyphicon-cutlery'></span> "+
        data[i].resturantName+
        "</a>"+
        "</h3>"+
        "</div> <!-- panel-heading -->";
        if(i==0){
          html+="<div id='collapse"+i+"' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='heading"+i+"'>";

        }else {
          html+="<div id='collapse"+i+"' class='panel-collapse collapse' role='tabpanel' aria-labelledby='heading"+i+"'>";
        }
        html+=  "<div class='panel-body'>"+
        "<div class='row'>"+
        "<div class='col-xs-6'>"+
        "<img class='info_image' src='"+data[i].image+"'>"+
        "</div>"+
        "<div class='col-xs-6'>"+
        "<dl>"+
        "<dt>รีวิว</dt>"+
        "<dd>"+data[i].review+"</dd>"+
        "<dt>ประเภทอาหาร</dt>"+
        "<dd>"+data[i].type+"</dd>"+
        "<dt>ประเภทร้านอาหาร</dt>"+
        "<dd>"+data[i].subtype+"</dd>"+
        "<dt>ย่าน</dt>"+
        "<dd>"+data[i].section+"</dd>"+
        "</dl>";
        if(data[i].map!="null"){

            // console.log(data[i].map);
            var latlng = data[i].map.split(",");
            var lat = latlng[0];
            var lng = latlng[1];
            html+="<button type='button' class='btn btn-primary btn_show_map' data-lat='"+lat+"' data-lng='"+lng+"' data-toggle='modal' data-target='#map_modal'>"+
            "แสดงแผนที่"+
            "</button>";  
          }
          html+="</div>"+
          "</div> <!-- row -->"+
          "</div> <!-- panel-body -->"+
          "</div> <!-- panel-collapse -->"+
          "</div> <!-- panel -->";
          $("#accordion").append(html);
        } 
        reply("ร้านอาหารจะแสดงอยู่ด้านซ้ายนะ หรืออยากจะเลือกอย่างอื่นต่ออีกก็ได้");
        reply(generateQuestionForCondition(conditions));
        selectedMode=condition;
        $("#chat_result").show();
      } 

    },
    error: function (xhr, ajaxOptions, thrownError) {
      alert(xhr.status);
      alert(thrownError);
    }
  });

} else {
  reply("ใส่หมายเลขมาได้เลย");
}
}

$(".chat_input").val('');
});

$(document).on('click', '.icon_refresh', function (e) {
  selectedMode=condition;
  $(".msg_container_base").html("");
  $("#accordion").html("");
  selectedConditions = [null,null,null];
 // $("#chat_result").hide();
 reply("เพิ่มเงื่อนไขที่อยากได้ต่อได้เลย");
 reply(generateQuestionForCondition(conditions));
});

$(document).ready(function() {
   // $("#chat_result").hide();
   initQuestionData();
   selectedMode=condition;
    reply("วันนี้อยากจะกินอะไรล่ะ");
   reply(generateQuestionForCondition(conditions));
   $('.chat_input').keypress(function (e) {
    var key = e.which;
    if(key == 13)  // the enter key code
    {
      $('#btn-chat').click();
      return false;  
    }
  });
 });



