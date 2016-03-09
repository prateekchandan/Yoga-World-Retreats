@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <!-- signup form start -->
        <div class="popup_alert_main">
            <div class="login_heading">
                signup
            </div>
            <div class="popup_inner">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="text" class="input_login" placeholder="Name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="email" class="input_login" placeholder="Email Id" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="password" class="input_login" placeholder="Password" name="password"> @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="password" class="input_login" placeholder="Confirm Password" name="password_confirmation"> @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span> @endif
                        </div>
                    </div>                   
                    <input type="submit" value="SIGN UP" class="sub_signup">
                </form>
                <div class="already_member"> already member? <a href="{{url('login')}}">login here</a></div>
            </div>
        </div>
        <!-- signup form  End -->
    </div>
</div>

@endsection
