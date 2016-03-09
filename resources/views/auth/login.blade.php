@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <!-- login form start -->
        <div class="popup_alert_main">
            <div class="login_heading">
                login
            </div>
            <div class="popup_inner">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="col-md-12">
                            <input type="email" class="input_login" name="email" placeholder="Email Id" value="{{ old('email') }}"> @if ($errors->has('email'))
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
                    <input type="checkbox" id="login_check" name="remember" class="checkbox_login">
                    <label for="login_check" class="remember_me">Remember me</label>
                    <a href="{{ url('/password/reset') }}" class="forgot_link">Forget password?</a>
                    <div>
                        <input type="submit" value="LOGIN" class="sub_signup">
                    </div>
                </form>
                <div class="have_an_acnt">
                    <p>Dont have an account? <a href="{{url('register')}}">Sign up</a></p>
                </div>

            </div>
        </div>
        <!-- login form  End -->
    </div>
</div>
@endsection
