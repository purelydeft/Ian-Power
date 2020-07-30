<!DOCTYPE html>
<html>
<head>
	<title>Powerpro's</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ url('home-assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('home-assets/css/responsive.css') }}">
</head>
<body>
<section class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="login-form-section">
					<figure class="login-logo-wrap">
						<img src="{{ url('/home-assets/images/login-logo.png') }}">
					</figure>
					<h3 class="login-form-heading">Log in to your Power Pro’s Online Account </h3>
                    <form method="POST" action="{{ route('admin-login') }}" class="login-form">
                        @csrf
						<div class="form-group">
						    <label for="email">Email address:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
						</div>
						<div class="form-group">
						    <label for="pwd">Password:</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="passwords-group-wrap">
                            @if (Route::has('password.request'))
                                    <a class="frgt-pswrd" href="{{ route('password.request') }}">
                                        {{ __('Forgotten your password?') }}
                                    </a>
                                @endif
                           
                            <button type="submit" class="login-btn">
                                {{ __('Login') }}
                            </button>
							{{-- <button type="button" class="login-btn">Log in</button> --}}
							<p class="unregistered-text">Not yet registered?</p>
                            <a href="/register" class="login-btn rgstr-btn">Register now</a>
                            {{-- <button type="button" class="login-btn rgstr-btn">Register now</button> --}}
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>