@extends("master",['title' => 'หน้าแรก'])
@section('script')
{{HTML::script('http://maps.googleapis.com/maps/api/js')}}
{{HTML::script('js/map.js')}}
{{HTML::script('js/index.js')}}
{{HTML::script('js/chatbox.js')}}
@stop
@section('style')
{{HTML::style('css/index.css')}}
{{HTML::style('css/chatbox.css')}}
@stop
@section('content')

<div class="container" id="chat_container">


   <div class="row" id="chat_wrapper">
    <div class="row col-md-8" id="chat_result">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        </div> <!-- panel-group -->
    </div> <!-- row -->
    <div class="row chat-window col-md-4 center" id="chat_window">
        <div class="col-xs-12 col-md-12">
         <div class="panel panel-default">
            <div class="panel-heading top-bar">
                <div class="col-md-8 col-xs-8">
                    <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - Quan (bot)</h3>
                </div>
                <div class="col-md-4 col-xs-4" style="text-align: right;">
                    <a href="#!"><span class="glyphicon glyphicon-refresh icon_refresh"></span></a>
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
</div>
<a href=".review" class="arrow inner-link"></a>
<div class="container reviewArea">
    <div class="review">
        @foreach($data as $data1)

        <div class="reviewImg col-md-4" map="{{$data1->map}}" restaurantName="{{$data1->resturantName}}" reviewData="{{$data1->review}}" foodType="{{$data1->type}}" subType="{{$data1->subtype}}" section="{{$data1->section}}">
            <img src="{{$data1->image}}" style="width:360px;height:360px" id="linkModal" data-toggle="modal" >

            {{$data1->resturantName}}

        </div> 
        @endforeach  
    </div>
    
    
</div>

  
</div>
<div class="container footer">

</div>  

<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" id="reviewDataHeader"></div>
            <div class="modal-body row" id="reviewDataBody">
                <div class="col-md-6" id="reviewDataBodyRight">
                </div>
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
    </div><!-- modal-header -->
    <div class="modal-body">
    </div>
</div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->
<div id="map_canvas" style="margin-top:-1000px"></div>
<div class="col-md-6" id="reviewDataBodyLeft" style="margin-top:-1000px"></div>
@stop
