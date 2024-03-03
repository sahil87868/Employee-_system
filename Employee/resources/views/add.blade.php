<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">VIEW</a>
  </div>
</nav>



<div class="container mt-3">
  <h2>ADD EMPLOYEE</h2>
  <form action="{{url('add')}}" method="post" enctype="multipart/form-data">
  @csrf  
  <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3">
      <label for="file">Photo:</label>
      <input type="file" class="form-control" id="file" name="file">
    </div>
    <div class="mb-3">
      <label for="mobile">Mobile Number:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    <button type="submit" class="btn btn-primary">ADD</button>
  </form>
</div>

</body>
</html>
