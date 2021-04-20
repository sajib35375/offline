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



	<div class="wrap ">
        <a class="btn btn-sm btn-info" href="{{ route('student.index') }}">Back</a>
		<div class="card shadow">
			<div class="card-body" style="text-align: center;">
                <img style="width: 300px;height: 300px;border-radius: 50%;" src="{{ url('') }}/media/img/{{ $data->photo }}" alt="">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>{{ $data->cell }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>{{ $data->username }}</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>{{ $data->age }}</td>
                    </tr>
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
