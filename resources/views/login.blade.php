@extends('layout')
@section('content')
<section class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="login-form-section">
					<figure class="login-logo-wrap">
						<img src="images/login-logo.png" class="login-logo">
					</figure>
					<h3 class="login-form-heading">Log in to your Power Pro’s Online Account </h3>
					<form action="/action_page.php" class="login-form">
						<div class="form-group">
						    <label for="email">Email address:</label>
						    <input type="email" class="form-control">
						</div>
						<div class="form-group">
						    <label for="pwd">Password:</label>
						    <input type="password" class="form-control">
						</div>
						<div class="passwords-group-wrap">
							<a href="Javascript:void(0);" class="frgt-pswrd">Forgotten your password?</a>
							<button type="button" class="login-btn">Log in</button>
							<p class="unregistered-text">Not yet registered?</p>
							<button type="button" class="login-btn rgstr-btn">Register now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection