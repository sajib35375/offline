<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body>



	<div class="wrap-table ">
        <a class="btn btn-sm btn-info" href="{{ route('student.create') }}">Add new student</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Student</h2>
                @if(Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p>
                @endif
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Username</th>
							<th>Age</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                    @foreach($all_data as $all)
						<tr>
							<td>{{ $loop->index+1 }}</td>
							<td>{{ $all->name }}</td>
							<td>{{ $all->email }}</td>
							<td>{{ $all->cell }}</td>
							<td>{{ $all->username }}</td>
							<td>{{ $all->age }}</td>
							<td><img src="media/img/{{ $all->photo }}" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="{{ route('student.show',$all->id) }}">View</a>
								<a class="btn btn-sm btn-warning" href="{{ route('student.edit',$all->id) }}">Edit</a>
								<a class="btn btn-sm btn-danger" href="{{ route('student.delete',$all->id) }}">Delete</a>
							</td>
						</tr>

                    @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>








	<!-- JS FILES  -->
	<script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
