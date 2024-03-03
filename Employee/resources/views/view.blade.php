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
    <a class="navbar-brand" href="add">ADD</a>
  </div>
</nav>


<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Employee Lists</h1>
                        
                    </div>
                </div>
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>PHOTO</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PASSWORD</th>
                                            <th>MOBILE NUMBER</th>
											<th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                     @if(!empty($data))
                                     @foreach($data as $d)
                                                 <tr>
                                            <td><img src="{{url('employee/'.$d->file)}}" width="50px"></td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->password}}</td>
                                            <td>{{$d->mobile}}</td>
											<td>
												<a href="{{url('/'.$d->id)}}"class="btn btn-danger me-1">DELETE</a>
												<a href="{{url('edit/'.$d->id)}}" class="btn btn-primary me-1">EDIT</a>
											</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
          
            </div>
      
               
            </div>
        </div>
    </div>






</body>
</html>
