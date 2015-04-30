@extends('master', ['title' => 'Add job'])
@section('style')
{{HTML::style('css/index.css')}}
@stop
@section('content')
<div class="container">
<div class="row wrapper">
        <div class='col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0r'>


            <!-- protected $fillable = array('resturantName','map','review', 'image',    'type', 'subtype',  'section'); -->

            <div class="page-header">
                <h1><span class="glyphicon glyphicon-flash"></span> Add Restaurant</h1>
            </div>    

            <!-- FORM STARTS HERE -->
            {{ Form::open(array('action' => 'FormController@saveForm',
            'id' => 'form-add-setting'))}}

            <div class="form-group">
                <div class="form-group required">
                    <label for="resturantName" class="control-label">Restaurant</label>
                    <p></p>
                    <input type="text" id="resturantName" class="form-control" required="required" name="resturantName" placeholder="resturantName" value="{{ Input::old('resturantName') }}">
                    @if ($errors->has('resturantName')) <p class="help-block">{{ $errors->first('resturantName') }}</p> @endif
                </div>
            </div>
            <div class="form-group required">
                <label for="map">map</label>

                <input type="text" id="map" required="required" class="form-control" name="map" placeholder="map">
            </div>

            <div class="form-group required">
                <label for="review">review</label>
                <p></p>
                <input type="text" id="review" required="required" class="form-control" name="review" placeholder="review">
            </div>

            <div class="form-group required">
                <label for="image">image</label>

                <input type="text" id="image" required="required" class="form-control" name="image" >
            </div>
            <div class="form-group col-xs-4 "  >
             <label for="type">type</label>
             {{ Form::select('type', array('' => 'กรุณาเลือก', 'คาว' => 'อาหารคาว', 'หวาน' => 'อาหารหวาน'), null, ['class' => 'form-control', 'required' => 'required']) }}
         </div>

         <div class="form-group col-xs-4"  >
             <label for="subtype">subtype</label>
             {{ Form::select('subtype', array('' => 'กรุณาเลือก', 'ญี่ปุ่น' => 'ญี่ปุ่น', 'ฝรั่ง' => 'ฝรั่ง', 'จีน' => 'จีน', 'ชาบู' => 'ชาบู' ,'อื่นๆ'=>'อื่นๆ'), null, ['class' => 'form-control']) }}

         </div>
         <div class="form-group col-xs-4"  >
             <label for="subtype">section</label>
             {{ Form::select('section', array('' => 'กรุณาเลือก', 'สยาม' => 'สยาม', 'สามย่าน' => 'สามย่าน', 'สีลม' => 'สีลม'), null, ['class' => 'form-control', 'required' => 'required']) }}

         </div> 

         <p><center><button type="submit" class="btn btn-success">Go</button></center></p>

     </form>
     {{ Form::close() }}


 </div>
</div>

</div>

</div>
@stop