@extends('Layout')


@section('content')
<section class="main">

 	<div class="login_div" style="background-image: url('{{ asset('images/bg_3.jpg')}}'); height: 100vh; padding: 60px;" >
			
			<div class="content-w3ls ">
        <div class="text-center icon">
				<span class="fa">Admin Login</span>
			</div>
				<form action="{{ route('admin.login.submit') }}" method="post">
					{{ csrf_field() }}
					<div class="field-group {{ $errors->has('email') ? ' has-error' : '' }}">
						<div class="wthree-field">
							<input name="email" id="email" type="text" value="{{ old('email') }}" placeholder="Email" required autofocus>	 
						</div>
					</div>
					@if ($errors->has('email'))
						<span class="text-theme-error help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
					<div class="field-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<div class="wthree-field">
							<input name="password" id="password" type="Password" placeholder="Password" required>
						</div>
						
					</div>
					@if ($errors->has('password'))
						<span class="text-theme-error help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
					<div class="wthree-field">
						<button type="submit" class="btn">Login</button>
					</div>
					<ul class="list-login ">
						<li>
							<a href="#" class="text-right"><span class="text-theme">forgot password?</span></a>
						</li>
			 
					</ul>
					<ul>
          </ul>
          <div class="register center">
          <button type="submit" class="btn">Register</button>
          </div>
				</form>
			</div>
		</div>
</section>
@endsection

