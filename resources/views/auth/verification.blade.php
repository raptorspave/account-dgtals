@extends('layouts.base')

@section('title', 'Verification email')

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
                            <h4>Verification email</h4>
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Already have account ? <a href="{{ route('site.auth.login') }}"> Sign in</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main wrapper -->
@endsection