<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<a hidden="hidden" data-toggle="modal" data-target="#exampleModal" class="btn btn-info" href="#">Edit</a>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ URL::to('/update/'.$updata->id) }}" method="post">
        	{{ csrf_field() }}
          <div class="form-group">
            <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
				  </div>
				  <input name="category" value="{{ $updata->category }}" type="text" class="form-control col-md-4" aria-describedby="inputGroup-sizing-sm">
				  <div class="input-group-prepend" style="padding-left: 10px">
				    <span class="input-group-text" id="inputGroup-sizing-default">Deadline</span>
				  </div>
				  <input name="deadline" value="{{ $updata->deadline }}" type="text" class="form-control col-md-4" aria-describedby="inputGroup-sizing-sm">
			</div>
			<div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Task</span>
				  </div>
				  <input name="task" value="{{ $updata->task }}" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
			</div>
        
      	  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Update</button>
	      </div>
	    </form>
	  </div>
	</div>
  </div>
</div>
<!--#Modal-->
<script>
$("#exampleModal").modal("show");
</script>
</body>
</html>