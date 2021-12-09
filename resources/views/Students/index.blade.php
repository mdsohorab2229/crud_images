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
          <h5 class="card-title">LARAVEL 8 IMAGE CRUD </h5>
    
          <a href="{{ url('add-student') }}" class="btn btn-primary float-right">Add Student Data</a>
          </div>
        </div>
      </div>
      <div>
        @if (session('status'))
        <p class="text-success">{{ session('status') }}</p>
         @endif
      </div>
      <table class="table table-bordered ">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Class</th>
            <th scope="col">Section</th>
            <th scope="col">Father Name</th>
            <th scope="col">Number</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
           
            @foreach ( $student as $stud)
            <tr>
            <td>{{ $stud->id }}</td>
            <td>{{ $stud->name }}</td>
            <td>
                <img src="{{ asset('uploads/students/'.$stud->image) }}" alt="Image" width="100px" height="70px"> 
            </td>
            <td>{{ $stud->class }}</td>
            <td>{{ $stud->section }}</td>
            <td>{{ $stud->fname }}</td>
            <td>{{ $stud->number }}</td>
            <td>
                <a href="{{url('edit-student/'.$stud->id)  }}" class="btn btn-success">EDIT</a>
            </td>
            <td>
                <a href="{{ url('delete-student/'.$stud->id) }}" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
            @endforeach
        
        </tbody>
      </table>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>