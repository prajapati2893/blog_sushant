<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
	<title>Blog</title>
			<style>
  			a {text-decoration:none;color: white;}
  			a:hover{color:white;}
			html, body {background-color: #fff;color: #636b6f;font-family: 'Nunito', sans-serif;font-weight: 200;height: 100vh;margin: 0;}
            .title {font-size: 44px;}
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
        					<a class="nav-link" href="get-categories">View All</a>
      					</li>
    				</ul>
  				</div>
			</nav>
		<div class="jumbotron mt-2">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<div class="title m-b-md mt-3">
                		Create Blog
            		</div>
					<form action="store-categories" method="post" class="mt-2">
						@csrf
		  				<div class="form-group">
		    				<label for="exampleInputEmail1" class="form-label">Name</label>
		    				<input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
		  				</div>
					  	<div class="form-group">
				    		<label for="exampleInputPassword1" class="form-label">Description</label>
				    		<input type="text" class="form-control" name="description" id="exampleInputPassword1">
				  		</div>
				  		<div class="form-group mt-3">
				  			<div class="form-floating">
  								<textarea class="form-control" name="content" id="floatingTextarea2" style="height: 250px"></textarea>
  								<label for="floatingTextarea2">Content</label>
							</div>	
				  		</div>
	  					<button type="submit" class="btn btn-primary mt-3">Submit</button>
					</form>
				</div>
				<div class="col-3"></div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>