@extends('layouts.app')

@section('content')
<style type="text/css">
    .check_lists ul li label{
        width: 100%;
    }
</style>
<div class="container">
    <div class="col-md-6">
        <!-- signup form start -->
        <div class="popup_alert_main">
            <div class="login_heading">
                register business
            </div>
            <div class="popup_inner">
                <form class="form-horizontal" role="form" method="POST" action="{{route('business.create') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="Business Name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="email" class="input_login" placeholder="Business Email Id" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="Website" name="website" value="{{ old('website') }}">
                            @if ($errors->has('website'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <textarea class="input_login" style="height: 100px" placeholder="Business Description" name="description">{{old('description')}}</textarea> @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="City or Region" name="city" value="{{ old('city') }}"> 
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
                                    <option {!!$country->name==old('country') ? 'selected':""!!}>{{$country->name}}</option>
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
                            <input type="text" class="input_login" placeholder="Phone" name="phone" value="{{ old('phone') }}"> 
                            @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span> @endif
                        </div>
                    </div>                  
                    <input type="submit" value="Register" class="sub_signup">
                </form>
            </div>
        </div>
        <!-- signup form  End -->
    </div>
    <div class="col-md-6">
        <br>
        <br>
        <br>
        <div class="right_side_details">
            <h3>Become a Partenr</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis orci placerat, suscipit erat quis, varius nibh. Praesent venenatis, ipsum non tempus laoreet, libero nulla viverra nisl, sed iaculis risus enim ac sapien. Donec ut posuere ipsum, in pretium elit. Sed ultricies tincidunt congue. Aliquam molestie purus quis nulla lobortis laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus fringilla gravida dictum. Donec nulla tortor, convallis ut tempus non, tincidunt eget libero. Quisque ac mi commodo dolor lobortis blandit. Integer non iaculis est, ut efficitur enim. Vestibulum eget sem sed lacus sodales egestas rhoncus non ipsum.</p>
            <div class="full_width check_lists">
                        <ul>
                            <li><label>Biggest offering of yoga retreats</label></li>
                            <li><label>Just the right trips for your audience</label></li>
                            <li><label>Hassle-free: We take care of all the customer support</label></li>
                            <li><label>Keep track of your earnings</label></li>
                            <li><label>Easy and free to join</label></li>
                        </ul>
                        
                    </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
var countries = {!!json_encode($countries)!!};
$('#country').on('change',function(e) {
    var ext = "";
    for (var i = countries.length - 1; i >= 0; i--) {
        if(countries[i]["name"] == $(this).val())
            ext = countries[i]["isd_code"];
    }
    $('#ext').val(ext);
})
</script>
@endsection