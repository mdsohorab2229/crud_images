<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SMS</title>
  </head>
  <body>
    <div class="container">
        
        <div class="card text-center">
            <div class="card-header">

            <div class="card-body">
              <h5 class="card-title">LARAVEL 8 IMAGE CRUD</h5>
        
              <a href="{{ url('students') }}" class="btn btn-danger float-right">BACK</a>

              </div>
            </div>
          </div>
        <div class="row my-4">
            <div class="col-8">
                @if (session('status'))
                <p class="text-success">{{ session('status') }}</p>
                 @endif
                <form action="{{ url('add-student') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                      </div>

                      <div class="form-group">
                        <label for="class">Class:</label>
                        <input type="text" class="form-control" id="class" placeholder="Enter Class" name="class">
                      </div>

                      <div class="form-group">
                        <label for="section">Section:</label>
                        <input type="text" class="form-control" id="section" placeholder="Enter Section" name="section">
                      </div>

                      <div class="form-group">
                        <label for="fname">Father Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter Father Name" name="fname">
                      </div>

                      <div class="form-group">
                        <label for="number">Number:</label>
                        <input type="text" class="form-control" id="number" placeholder="Enter Number" name="number">
                      </div>
  


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        
      </div>
      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>