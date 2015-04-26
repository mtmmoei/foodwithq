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
            <div class="row chat-window col-xs-5 col-md-3" id="chat_window">
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
                        <div class="row msg_container base_receive">
                            <div class="col-md-2 col-xs-2 avatar">
                                <img src="http://placehold.it/50/FA6F57/fff&text=Q" alt="User Avatar"  class=" img-responsive ">
                            </div>
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row msg_container base_sent">
                                <div class="col-md-10 col-xs-10">
                                    <div class="messages msg_sent">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-2 avatar">
                                        <img src="http://placehold.it/50/55C1E7/fff&text=ME" alt="User Avatar"  class=" img-responsive ">
                                    </div>
                                </div>
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
        </div>
        @stop