<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Employee CRM</h1>
  <p>Resize this responsive page to see the effect!</p> 
  <a href="{{route('createEmployee')}}">
    <button class="btn btn-secondary">Create Employee</button>
    </a>
</div>
  
<div class="container mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Department</th>
        <th>Address</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($employees as $employee)
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->name}}</td>
        <td>{{$employee->phone}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->designation}}</td>
        <td>{{$employee->department}}</td>
        <td>{{$employee->address}}</td>
        <td>{{$employee->created_at}}</td>
        <td>
            <form action="{{route('deleteEmployee', $employee->id)}}" method="POST">
                @method("DELETE")
                @csrf
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
        
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
