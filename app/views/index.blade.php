@extends("master",['title' => 'หน้าแรก'])
@section('content')
<div class="container">
   <h1>ของกินของขวัญ</h1>
   <div class="row" id="chat_wrapper">
    <div class="row col-md-9" id="chat_result">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h3 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span class="glyphicon glyphicon-cutlery"></span> 
                            MIYABI KAPPO Thonglor 25
                        </a>
                    </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="place_info">
                            <p>ร้านซูชิและอาหารญี่ปุ่นร้านนี้เป็นลูกพี่ลูกน้องกับร้าน "ฮานาโกะ คัปโปะ" (Hanako Kappo)
                                ร้านซูชิและอาหารญี่ปุ่นร้านนี้เป็นลูกพี่ลูกน้องกับร้าน "ฮานาโกะ คัปโปะ" (Hanako Kappo) ที่ดูจากตัวร้านและบรรยากาศภายนอกแล้ว นึกว่ามากินอาหารที่บ้านขุนนางญี่ปุ่นสมัยเอโดะ เพราะตัวร้านเป็นบ้านญี่ปุ่นโบราณได้อารมณ์ดีเหลือเกิน ทั้งภายนอกและภายนอกตกแต่งด้วยไม้แทบจะทั้งสิ้น ส่วนเมนูก็ไม่น้อยหน้า มีหลายอย่างทีเดียวที่น่าสนใจ เช่น โอโทโร่นิงิริ ที่มีไขมันแทรกอย่างละเอียดยิบ ซาชิมิชามโตและปลาสดๆ อะโวคาโด โรลคำโต แทบจะละลายในปาก ปูทาราบะตัวโต และทีเด็ดคือ สลัดมิยาบิ ที่ใส่กระดูกปลาไหลและหนังปลาแซลมอนทอดกรอบ ไข่ปลาแซลมอนหมักโชยุ และปลาเงิน เอาไว้เป็นออร์เดิฟก่อนถึงจานใหญ่</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row chat-window col-xs-5 col-md-3 center" id="chat_window">
            <div class="col-xs-12 col-md-12">
             <div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Quan (bot)</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                        <a href="#"><span class="glyphicon glyphicon-refresh icon_refresh"></span></a>
                    </div>
                </div>
                <div class="panel-body msg_container_base">
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary btn-sm" id="btn-chat">Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="review">
            @foreach($data as $data1)
            
            <div class="reviewImg">
                <img src="{{$data1->image}}" style="width:360px;height:360px"  reviewId="{{$data1->review}}" id="linkModal" data-toggle="modal" href="#review">
                {{$data1->resturantName}}
            </div> 
            @endforeach  
        
    </div>
    
</div>    




 
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
 
            <div class="modal-header">
                <h3>Review</h3>
            </div>
            <div class="modal-body" id="reviewData">
                
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger btn-modal btn-cancel"  data-dismiss="modal">OK</a>
            </div>

        </div>
    </div>
</div>
 
@stop
