<!DOCTYPE html>
<html>
<head>
	<title>update product</title>
	<!-- bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="mb-3">update Product Form</h1>
		@if(Session::has('msg'))
		<div class="alert alert-success">
			{{Session::get('msg')}}
			@endif
			
		</div>
	   <form method="post" enctype="multipart/form-data" action="{{route('updateproduct',$product->id)}}">
	   	@csrf
	   		
	   	<div class="col-md-6">
	   			<label for="productname">Productname</label>
	   			<input type="" class="form-control" name="pname" placeholder="enter productname" id="inputproductname" value="{{$product->product_name}}">
	   		</div>

	   			<div class="col-md-6">
	   			<label for="price">product price</label>
	   			<input type="number" class="form-control" name="price" placeholder="product price" value="{{$product->product_price}}">
	   		</div>

	   			<div class="col-md-6">
	   			<label for="quantity">product quantity</label>
	   			<input type="quantity" class="form-control" name="quantity" placeholder="enter quantity" value="{{$product->product_quantity}}">
	   		</div>

	   		<div class="col-md-6">
	   			<label for="description">description</label>
	   		<textarea class="form-control" name="description"> {{$product->product_description}}</textarea>
	   		</div>

	   			<div class="col-md-6">
	   			<label for="image">product image</label>
	   			<input type="file" class="form-control" name="image" class="form-control">
	   			<img src="{{asset('uploads/Product')}}/{{$product->product_image}}" width="80">
	   		</div>
	   		
	   		<div class="col-md-6">
	   			<button type="submit" class="btn btn-primary">update product</button>
	   		
	   		</div>
	   		</form>
	   	</div>
</body>
</html>