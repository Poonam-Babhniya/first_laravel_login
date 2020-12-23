<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel 8.0 CRUD Application</title>
	<link rel="stylesheet" href="{{'assets/css/bootstrap.css'}}">
</head>
<body class="bg-light">
	<div class="p-3 mb-2 bg-dark text-white">
		<div class="container">
			<div class="h3">USER LOGIN MODULE</div>
		</div>
	</div>
	<div class="container">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"><h5>Login</h5></div>
				<div class="card-body">
					<form action="{{url('login')}}" method="post" name="addUser" id="addUser">
						@csrf
						
						<div class="form-group">
							<lable for="">Email</lable>
							<input type="email" name="email" id="email" value="{{old('email')}}"  class="form-control">
							@if($errors->any())
							<p>{{$errors->first('email')}}</p>
							@endif
						</div>

						<div class="form-group">
							<lable for="">Password</lable>
							<input type="password" name="password" id="password" value="{{old('password')}}"  class="form-control">
							@if($errors->any())
							<p>{{$errors->first('password')}}</p>
							@endif
						</div>
						<br>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Login</button>
						</div>
						<p>Not Registered Yet ? <a href="{{url('register')}}">Register Now</a></p>
					</form>

				</div>
			</div>
		</div>

	</div>



</body>
</html>
