@extends("master",['title' => 'หน้าแรก'])
@section('content')
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ของกินของขวัญ</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="about.blade.html">About</a></li>
      </ul>
    </div>

  </div>
</nav>





<div class="container">
 
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

<div class="container reviewArea">
    <div class="review">
        @foreach($data as $data1)

        <div class="reviewImg" map="{{$data1->map}}" restaurantName="{{$data1->resturantName}}" reviewData="{{$data1->review}}" foodType="{{$data1->type}}" subType="{{$data1->subtype}}" section="{{$data1->section}}">
            <img src="{{$data1->image}}" style="width:360px;height:360px" id="linkModal" data-toggle="modal" >
            {{$data1->resturantName}}

        </div> 
        @endforeach  
        
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
    </div>
    <div class="modal-body">
        
    </div>
</div>
</div>
</div>
<div id="map_canvas" style="margin-top:-1000px"></div>
 <div class="col-md-6" id="reviewDataBodyLeft" style="margin-top:-1000px"></div>
@stop
