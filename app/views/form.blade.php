@extends('master', ['title' => 'Add job'])
@section('content')
<div class="container">
    <div class='col-md-10'>
        @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>        
            @endforeach
        </div>
        @endif


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

            <input type="text" id="map" class="form-control" name="map" placeholder="map">
        </div>

        <div class="form-group">
            <label for="review">review</label>
            <p></p>
            <input type="text" id="review" class="form-control" name="review" placeholder="review">
        </div>

        <div class="form-group">
            <label for="image">image</label>

            <input type="text" id="image" class="form-control" name="image" >
        </div>
        <div class="form-group"  >
         <label for="type">type</label>
            {{ Form::select('type', array('' => 'กรุณาเลือก', 'maindish' => 'อาหารคาว', 'sweet' => 'อาหารหวาน'), null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group"  >
         <label for="subtype">subtype</label>
            {{ Form::select('subtype', array('' => 'กรุณาเลือก', 'jp' => 'ญี่ปุ่น', 'en' => 'ฝรั่ง', 'ch' => 'จีน', 'shabu' => 'ชาบู' ,'other'=>'อื่นๆ'), null, ['class' => 'form-control']) }}

        </div>
        <div class="form-group"  >
         <label for="subtype">section</label>
            {{ Form::select('section', array('' => 'กรุณาเลือก', 'siam' => 'สยาม', 'samyan' => 'สามย่าน', 'silom' => 'สีลม'), null, ['class' => 'form-control', 'required' => 'required']) }}

        </div> 

        <p><button type="submit" class="btn btn-success">Go</button>

        </form>
        {{ Form::close() }}


    </div>

</div>

</div>
@stop