@extends('layouts.base')

@section('title', 'Регистрация')

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
                            <h4>Register</h4>
                            <form method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('site.auth.registerPost') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="User Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="text" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                    @if ($errors->has('password'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input name="password2" type="password" class="form-control" placeholder="Confirm Password">
                                    @if ($errors->has('password2'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('password2') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="checkbox">
                                    <label>
									  <input name="is_confirmed" type="checkbox" {{ old('is_confirmed') ? 'checked' : '' }}> Agree the terms and policy
								    </label>
                                    @if ($errors->has('is_confirmed'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('is_confirmed') }}
                                    </div>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{ route('site.auth.login') }}"> Sign in</a></p>
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