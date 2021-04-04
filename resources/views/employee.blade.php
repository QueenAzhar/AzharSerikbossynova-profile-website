<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add information</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="container">
        <div class="jumbotron">
        <br>
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
               
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                </div>

                <div class="form-group">
                <label>Surname</label>
                <input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                </div>

                <div class="form-group">
                <label>Email</label>
                <input type="email"name ="email" class="form-control" placeholder="Enter Email">
                </div>

                <label>Image</label>
                <div class="input-group">
                         <div class="custom-file">
                         <input type="file" name="image" class="custom-file-input" >
                         <label class="custom-file-label">Choose file</label>
                           
                           
                </div>
                
                </div>
                <br><br>
                <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
                <a href="/employeepage" class="btn btn-primary">See all information</a>

               
            </form>
            <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

        </div>
        </div>
        
    
</body>
</html>