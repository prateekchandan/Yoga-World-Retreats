@extends('layouts.app')

@section('content')
<style type="text/css">
    .check_lists ul li label{
        width: 100%;
    }
</style>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <!-- signup form start -->
        <div class="popup_alert_main">
            <div class="login_heading">
                Edit business Details
            </div>
            <div class="popup_inner">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{route('business.create') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="Business Name" name="name" value="{{old('name')==NULL?$business->name:old('name')}}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="email" class="input_login" placeholder="Business Email Id" name="email" value="{{old('email')==NULL?$business->email:old('email')}}"> @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="Website" name="website" value="{{old('website')==NULL?$business->website:old('website')}}">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <textarea class="input_login" style="height: 100px" placeholder="Business Description" name="description">{{old('description')==NULL?$business->description:old('description')}}</textarea> @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="City or Region" name="city" value="{{old('city')==NULL?$business->city:old('city')}}"> 
                            @if ($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <select class="input_login"  id="country" name="country" style="background-color: white">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option {!!$country->name==(old('country')==NULL?$business->country:old('country'))? 'selected':""!!}>{{$country->name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('country'))
                            <span class="help-block">
                                <strong >{{ $errors->first('country') }}</strong>
                            </span> @endif
                        </div>
                    </div> 
                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <div class="col-md-3">
                                <input class="input_login" id="ext" name="ext" value="{{ old('ext') }}" readonly="">
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="input_login" placeholder="Phone" name="phone" value="{{old('phone')==NULL?$business->phone:old('phone')}}"> 
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span> @endif
                        </div>
                    </div>                  
                    <input type="submit" value="SAVE" class="sub_signup">
                </form>
            </div>
        </div>
        <!-- signup form  End -->
    </div>
   
</div>

@endsection

@section('script')
<script>
var countries = {!!json_encode($countries)!!};
$('#country').on('change',function(e) {
    updateext();
})
function updateext(){
    var ext = "";
    for (var i = countries.length - 1; i >= 0; i--) {
        if(countries[i]["name"] == $('#country').val())
            ext = countries[i]["isd_code"];
    }
    $('#ext').val(ext);
}
updateext();
</script>
@endsection