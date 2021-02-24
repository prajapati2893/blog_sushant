<!DOCTYPE html>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
		<title></title>
		<style>
  			a {text-decoration:none;color: white;}
  			a:hover{color:white;}
  			 html, body {background-color: #fff;color: #636b6f;font-family: 'Nunito', sans-serif;font-weight: 200;height: 100vh;margin: 0;}
            .title{font-size: 44px;}
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
 			 <div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="/">Home</a>
      				</li>
				    <li class="nav-item">
				   	   <a class="nav-link" href="create-categories">Create</a>
				    </li>
				    <li class="nav-item">
        				<a class="nav-link" href="get-categories">View</a>
      				</li>
    			</ul>
  			</div>
			</nav>
			<div class="title m-b-md mt-3">
                All Blogs
            </div>
			<table class="table table-bordered mt-5">
  				<thead>
    				<tr>
    					<th scope="col">S.no</th>
      					<th scope="col">Name</th>
      					<th scope="col">Description</th>
      					<th scope="col">Options</th>
    				</tr>
  				</thead>
  				<tbody>
  					@foreach($categories as $key)
    					<tr>
    						<td>{{$key->id}}</td>
      						<td>{{$key->name}}</td>
      						<td>{{$key->description}}</td>
      						<td>
      							<button type="button" class="btn btn-secondary"><a href="">View</a></button>
      							<button type="button" class="btn btn-secondary"><a href="edit-categories/{{$key->id}}">Edit</a></button>
      							<button type="button" class="btn btn-secondary"><a href="">Delete</a></button>
      						</td>
    					</tr>
    				@endforeach
  				</tbody>
			</table>	
		</div>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>

