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
  <a href="{{route('home')}}">
    <button class="btn btn-secondary">All Employees</button>
    </a>
</div>

<div class="container mb-5 ">
<form action="{{route('storeEmployee')}}" method="POST">
  @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Full Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
    @error("name")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Phone Number:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter phone number" name="phone">
    @error("phone")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Email:</label>
    <input type="email" class="form-control" id="pwd" placeholder="Enter email" name="email">
    @error("email")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Designation:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter designation" name="designation">
    @error("designation")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Department:</label>
    <select name="department" id="" class="form-select">
        <option value="IT">IT</option>
        <option value="HR">HR</option>
        <option value="Finance">Finance</option>
    </select>
    @error("department")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Address:</label>
    <input type="text" class="form-control" id="pwd" placeholder="Enter address" name="address">
    @error("address")
    <div class="text-danger">{{$message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  


</body>
</html>
