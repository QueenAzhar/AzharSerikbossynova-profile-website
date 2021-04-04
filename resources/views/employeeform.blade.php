<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">

        <h1>All users information</h1>
        <br>
        <a href="/employee" class="btn btn-primary">Add new information</a>
        <br>
        <br>
        <table class="table table-stripped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($employees as $employee)

        
    <tr>
      <th >{{ $employee->id}}</th>
      <td>{{ $employee->name}}</td>
      <td>{{ $employee->surname}}</td>
      <td>{{ $employee->email}}</td>
      <td><img src="{{ asset('uploads/employee/' . $employee->image) }}" width="100px;" height="100px;" alt="Image"></td>
    </tr>
    @endforeach
    </tbody>
    </table>

        </div>
    </div>
</body>
</html>