<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<a href="{{ URL::to('logout') }}" class="btn btn-danger float-right mt-5">Logout</a>
		<h1 style="padding-top: 100px;">To Do List</h1>
		<form action="{{ URL::to('tableStore') }}" method="post">
			{{ csrf_field() }}
			<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
				  </div>
				  <input name="category" type="text" class="form-control col-md-2" aria-describedby="inputGroup-sizing-sm">
				  <div class="input-group-prepend" style="padding-left: 25px">
				    <span class="input-group-text" id="inputGroup-sizing-default">Deadline</span>
				  </div>
				  <input name="deadline" type="text" class="form-control col-md-2" aria-describedby="inputGroup-sizing-sm">
				  <div class="input-group-prepend" style="padding-left: 25px">
				    <span class="input-group-text" id="inputGroup-sizing-default">Task</span>
				  </div>
				  <input name="task" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
			</div>
			<button type="submit" class="btn btn-success" style="margin-bottom: 10px">Insert</button>
		</form>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Category</th>
		      <th scope="col">Deadline</th>
		      <th scope="col">Task</th>
		      <th scope="col"></th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count($data)>0)
			@foreach($data as $abc)
			<tr>
		      <th scope="row">{{ $abc->id }}</th>
		      <td>{{ $abc->category }}</td>
		      <td>{{ $abc->deadline }}</td>
		      <td>{{ $abc->task }}</td>
		      <td>
				<a class="btn btn-info" href="{{ URL::to('/modal/'.$abc->id) }}">Edit</a>
			  </td>
		    </tr>
			@endforeach
	     @endif
		  </tbody>
		</table>
	</div>







	
</body>
</html>