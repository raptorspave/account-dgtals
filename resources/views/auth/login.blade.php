@extends('layouts.base')

@section('title', 'Вход в систему')

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
                            <h4>Login</h4>
                            <form method="POST" action="{{ route('site.auth.loginPost') }}">
                                {{ csrf_field() }}
                                @if (session('authError'))
                                <div class="alert alert-danger">
                                    {{ session('authError') }}
                                </div>
                                @endif
                                @if (session('authSuccess'))
                                <div class="alert alert-success">
                                    {{ session('authSuccess') }}
                                </div>
                                @endif
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="text" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
    									<input name="remember" type="checkbox" {{ old('remember')? 'checked': '' }}> Remember Me
    								</label>
                                    @guest
                                    <label class="pull-right">
    									<a href="{{ route('password.request') }}">Forgotten Password?</a>
    								</label>
                                    @endguest
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="{{ route('site.auth.register') }}"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main wrapper -->
@endsection