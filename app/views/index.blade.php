@extends("master",['title' => 'หน้าแรก'])
@section('content')
<div class="container">
 <h1>ของกินของขวัญ</h1>
 <div class="row" id="chat_wrapper">
    <div class="row col-md-8" id="chat_result">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  </div> <!-- panel-group -->
</div> <!-- row -->
<div class="row chat-window col-md-4" id="chat_window">
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

<!-- Modal -->
<div class="modal fade" id="map_modal" tabindex="-1" role="dialog" aria-labelledby="map_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="map_modalLabel">แผนที่ร้าน</h4>
    </div>
    <div class="modal-body">
        
    </div>
</div>
</div>
</div>
<div id="map_canvas" style="margin-top:-1000px"></div>
@stop
