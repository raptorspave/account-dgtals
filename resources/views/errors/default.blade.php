@extends('layouts.base')

@section('title'){{ $errorMessage or 'Внутренняя ошибка сервера' }}@endsection

@section('wrapper')
<div class="error-page" id="wrapper">
	<div class="error-box">
		<div class="error-body text-center">
			<h1>{{ $errorCode or '500' }}</h1>
			<h3 class="text-uppercase">{{ $errorMessage or 'Внутренняя ошибка сервера' }}</h3>
			<p class="text-muted m-t-30 m-b-30">Пожалуйста, попробуйте через некоторое время</p>
			<a class="btn btn-info btn-rounded waves-effect waves-light m-b-40" href="{{ url('/') }}">Back to home</a>
		</div>
		<footer class="footer text-center"> &copy; 2018 All rights reserved. </footer>
	</div>
</div>
@endsection