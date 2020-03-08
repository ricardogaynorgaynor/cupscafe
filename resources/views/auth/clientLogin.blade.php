@extends('Layout')

@section('content')
<section class="main">

 	<div id="login_div" style="background-image: url('{{ asset('images/bg_3.jpg')}}'); height: 100vh; padding: 30px;" >
			
		<div class="content-w3ls ">
        <div class="text-center icon">
			<span class="fa">Customer Login</span>
		</div>
	<form action="{{ route('cust.login.submit') }}" method="post">
		{{ csrf_field() }}
			<div class="field-group">
				<div class="wthree-field">
					<input name="fname" id="fname" type="text" value="" placeholder="First Name" required>
				</div>
        	</div>

			<div class="field-group">
				<div class="wthree-field">
					<input name="lname" id="lname" type="text" value="" placeholder="Last Name" required>
				</div>
			</div>

			<div>
				<span class="text-theme">Digital ID:</span>
				<select class="field-group" onfocus="selection('digital_id');" id="digital_id" name="digital_id">
					<option value="1">Password</option>
					<option value="2">Image</option>
					<option value="3">Audio</option>
				</select>
			</div>

          
			<div class="field-group" id = "1" style="display: block" >
				<div class="wthree-field">
					<input name="password" id="myInput" type="Password" placeholder="Password">
				</div>
			</div>

			<div id = "2" style="display: none;">
				<span>IMAGE</span>
				
			</div>

			<div id = "3" style="display: none;">
				<span>AUDIO</span>
			</div>

			<div class="wthree-field">
				<button type="submit" class="btn">Login</button>
			</div>
		
			<a href="#" class="text-right"><span class="text-theme">forgot password?</span></a>
			
			<div class="register center">
			<button type="submit" class="btn">Register</button>
			</div>
		</form>
		</div>
	</div>
</section>
 
@endsection