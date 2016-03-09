@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <!-- signup form start -->
        <div class="popup_alert_main">
            <div class="login_heading">
                Reset Password
            </div>
           
            <div class="popup_inner">
                 @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-md-12">
                            <input type="email" class="input_login" placeholder="Email Id" name="email" value="{{ old('email') }}"> @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>
        
                    <input type="submit" value="Send Password Reset Link" class="sub_signup">
                </form>
            </div>
        </div>
        <!-- signup form  End -->
    </div>
</div>

@endsection
