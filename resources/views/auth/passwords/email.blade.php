@extends('layouts.base')

@section('title', 'Reset Password')

@section('wrapper')
<!-- Main wrapper  -->
<div id="main-wrapper">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <div class="form-group text-center">
                                <img src="/profile/images/logo-text.png" class="sintez-logo-lg" alt="">
                            </div>
                            <h4>Reset Password</h4>
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
