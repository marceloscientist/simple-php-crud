<!DOCTYPE html>
<html>
<head>
<title>CRUD APP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
  <div class="row" style="margin-top: 70px;">
    <div class="col-md-10 col-md-offset-1">
      <center><h1>Todo List</h1></center>



    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
<table class="table"> 

  <thead>
    <tr>
     <td colspan="4">
      <button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">
    Add Task
  </button>






  <button type="button" class="btn btn-default float-right">
    Print
  </button></td>
    </tr>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Task</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="col-md-10">Mark</td>
      <td><a href="#" class="btn btn-success">
	    Edit
          </a></td>
      <td><a href="#" class="btn btn-danger">
	    Delete
          </a></td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


</body>
</html>