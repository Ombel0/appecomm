@extends('layouts.master')
<base href="/img" >
@section('content')



<div class="col-4">
    <img src="img/Product-9.jpg">

      <h4>{{ $product->title }}</h4>
      <p class="mb-auto text-muted">{{ $product->description }}</p>
      <div class="rating">
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star"></i>
         <i class="fa fa-star-o"></i>
      </div>
<!--------add to carts ----->
       <form action=""  method="POST">
       @csrf
          <button type="submit" class="btn btn-dark"> Add to cart </button>
      </form>
<!--------add to carts ----->
      <p>{{ $product->getPrice()}}</p>
     </div>



</div>


<!--------latest Products----->



<h2 class="title">latest Products</h2>
<div class="row">


    <div class="col-4">
        <img src="img/Product-11.jpg">

          <h4>{{ $product->title }}</h4>
          <p class="mb-auto text-muted">{{ $product->description }}</p>
          <div class="rating">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star-o"></i>
          </div>
<!--------add to carts ----->

        <form action="" method="POST">
          @csrf
          
          <button type="submit" class="btn btn-dark"> Add to cart </button>

      </form>
<!--------add to carts ----->
           <p>{{ $product->getPrice() }}</p>
        </div>
@endsection
