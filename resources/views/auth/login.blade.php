<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>Color Admin | Login Page</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="{{ asset('assets/css/apple/app.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />

</head>
<body class="pace-top">

<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div id="page-container" class="fade">

<div class="login login-with-news-feed">

<div class="news-feed">
<div class="news-image" style="background-image: url({{ asset('assets/img/login-bg/finance.jpg') }})"></div>

</div>


<div class="right-content">

<div class="login-header">
<div class="brand">
<span class="logo"><i class="ion-ios-airplane"></i></span> <b>GEC</b> Web Admin
<small>GMF Employees Club web Administration</small>
</div>
<div class="icon">
<i class="fa fa-sign-in-alt"></i>
</div>
</div>


<div class="login-content">
    <form method="POST" action="{{ route('login') }}">
        @csrf
<div class="form-group m-b-15">
{{-- <input type="text" class="form-control form-control-lg"  required /> --}}
<input id="text" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
<div class="form-group m-b-15">
    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="checkbox checkbox-css m-b-30">
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
<label for="remember">
Remember Me
</label>


</div>
<div class="login-buttons">
<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
</div>
{{-- <div class="m-t-20 m-b-40 p-b-40 text-inverse">
Not a member yet? Click <a href="register_v3.html">here</a> to register.

</div> --}}

{{-- @if (Route::has('password.request'))
<a class="btn btn-link" href="{{ route('password.request') }}">
    {{ __('Forgot Your Password?') }}
</a>
@endif --}}
<hr />
<p class="text-center text-grey-darker mb-0">
&copy; GMF Employees Club. All Right Reserved 2020
</p>
</form>
</div>

</div>

</div>



<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="{{ asset('assets/js/app.min.js') }}" type="abe7921e58738ae332326e85-text/javascript"></script>
<script src="{{ asset('assets/js/theme/apple.min.js') }}" type="abe7921e58738ae332326e85-text/javascript"></script>

<script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="abe7921e58738ae332326e85-|49" defer=""></script></body>

</html>