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
			<div class="h3">Laravel 8.0 CRUD Application(FIR MODULE)</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-3 text-right">
				<a href="{{'register/add'}}" class="btn btn-primary">ADD</a>
			</div>
			@if (Session::has('msg'))
			<div class="col-md-12">
				<div class="alret alret-success">{{Session::get('msg')}}</div>
			</div>
			@endif
			@if (Session::has('errorMsg'))
			<div class="col-md-12">
				<div class="alret alret-danger">{{Session::get('errorMsg')}}</div>
			</div>
			@endif
			
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header"><h5>Registration/List</h5></div>
				<div class="card-body">
					<table class="table">
						<thead class="thead-dark bg-dark text-white">
							<tr>
								<th>ID</th>
								<th>name</th>
								<th>Email</th>
								<th>Password</th>
								
								<th width="100">EDIT</th>
								<th width="100">DELETE</th>
							</tr>
						</thead>
						@if($users)
						@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->password}}</td>
							<td><a href="{{url('register/edit/'.$user->id)}}" class="btn btn-primary">Edit</a></td>
							<td><a href="#" onclick="deleteUser({{$user->id}});" class="btn btn-danger">Delete</a></td>
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="6">Fir not added yet.</td>
						</tr>
						@endif

					</table>
				</div>
			</div>
		</div>

	</div>



</body>
</html>
<script type="text/javascript">
	function deleteUser(id){
		if(confirm('Are u sure you want to delete?')){
			window.location.href='{{url('register/delete')}}/'+id;
		}
	}
</script>
