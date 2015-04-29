@extends('master', ['title' => 'Add job'])
@section('content')
<div class="container">
    <div class="row">
        <div class='col-md-10'>


            <!-- protected $fillable = array('resturantName','map','review', 'image',    'type', 'subtype',  'section'); -->

            <div class="page-header">
                <h1><span class="glyphicon glyphicon-flash"></span> Add Restaurant</h1>
            </div>    

            <!-- FORM STARTS HERE -->
            {{ Form::open(array('action' => 'FormController@saveForm',
            'id' => 'form-add-setting'))}}

            <div class="form-group">
                <div class="form-group required">
                    <label for="resturantName" class="col-md-2 control-label">Restaurant</label>
                    <p></p>
                    <input type="text" id="resturantName" class="form-control" required="required" name="resturantName" placeholder="resturantName" value="{{ Input::old('resturantName') }}">
                    @if ($errors->has('resturantName')) <p class="help-block">{{ $errors->first('resturantName') }}</p> @endif
                </div>
            </div>
            <div class="form-group">
                <label for="map">map</label>

                <input type="text" id="map" required="required" class="form-control" name="map" placeholder="map">
            </div>

            <div class="form-group">
                <label for="review">review</label>
                <p></p>
                <input type="text" id="review" required="required" class="form-control" name="review" placeholder="review">
            </div>

            <div class="form-group">
                <label for="image">image</label>

                <input type="text" id="image" required="required" class="form-control" name="image" >
            </div>
            <div class="form-group"  >
             <label for="type">type</label>
             {{ Form::select('type', array('' => 'กรุณาเลือก', 'คาว' => 'อาหารคาว', 'หวาน' => 'อาหารหวาน'), null, ['class' => 'form-control', 'required' => 'required']) }}
         </div>

         <div class="form-group"  >
             <label for="subtype">subtype</label>
             {{ Form::select('subtype', array('' => 'กรุณาเลือก', 'ญี่ปุ่น' => 'ญี่ปุ่น', 'ฝรั่ง' => 'ฝรั่ง', 'จีน' => 'จีน', 'ชาบู' => 'ชาบู' ,'อื่นๆ'=>'อื่นๆ'), null, ['class' => 'form-control']) }}

         </div>
         <div class="form-group"  >
             <label for="subtype">section</label>
             {{ Form::select('section', array('' => 'กรุณาเลือก', 'สยาม' => 'สยาม', 'สามย่าน' => 'สามย่าน', 'สีลม' => 'สีลม'), null, ['class' => 'form-control', 'required' => 'required']) }}

         </div> 

         <p><button type="submit" class="btn btn-success">Go</button></p>

     </form>
     {{ Form::close() }}


 </div>
</div>

</div>

</div>
@stop