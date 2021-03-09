<!DOCTYPE html>
<html>
<head>
	<title>add product</title>
	<!-- bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mb-3">Add Product Form</h1>
		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{Session::get('msg')}}
			@endif
			
		</div>
	   <form method="post" enctype="multipart/form-data" action="{{route('storeproduct')}}">
	   	@csrf
	   		
	   	<div class="col-md-6">
	   			<label for="productname">Productname</label>
	   			<input type="" class="form-control" name="pname" placeholder="enter productname" id="inputproductname">
	   		</div>

	   			<div class="col-md-6">
	   			<label for="price">product price</label>
	   			<input type="number" class="form-control" name="price" placeholder="product price">
	   		</div>

	   			<div class="col-md-6">
	   			<label for="quantity">product quantity</label>
	   			<input type="quantity" class="form-control" name="quantity" placeholder="enter quantity" >
	   		</div>

	   		<div class="col-md-6">
	   			<label for="description">description</label>
	   			<input type="description" class="form-control" name="description" placeholder=" description">
	   		</div>

	   			<div class="col-md-6">
	   			<label for="image">product image</label>
	   			<input type="file" class="form-control" name="image" placeholder="product price">
	   		</div>
	   		
	   		<div class="col-md-6">
	   			<button type="submit" class="btn btn-primary">add product</button>
	   		
	   		</div>
	   		</form>
	   	</div>
</body>
</html>