@extends("master",['title' => 'หน้าแรก'])
@section('content')
 <div class="container">
  	<h1>ของกินของขวัญ</h1>
    <div class="row chat-window col-xs-5 col-md-3" id="chat_window_1">
        <div class="col-xs-12 col-md-12">
        	<div class="panel panel-default">
                <div class="panel-heading top-bar">
                    <div class="col-md-8 col-xs-8">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Q (bot)</h3>
                    </div>
                    <div class="col-md-4 col-xs-4" style="text-align: right;">
                    	<!-- refresh -->


                     <!--    <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a> -->
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

<div class="container">
    <div class="review">
        <div class="reviewImg">
            <img src="" style="width:128px;height:128px"  id="linkModal" data-toggle="modal" href="#review"><br>
            abcd
        </div> 
        <div class="reviewImg">
            <img src="" style="width:128px;height:128px"><br>
            abcd
        </div>    
    </div>
    
</div>    




 
  <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
 
  <div class="modal-header">
        
        <h3>Review</h3>
   </div>
   <div class="modal-body">
   </div>
   <div class="modal-footer">
       <a href="#" class="btn btn-danger btn-modal btn-cancel"  data-dismiss="modal">OK</a>
   </div>

  </div>
</div>
</div>
@stop