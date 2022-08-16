@extends('layouts.master')

@section('content')

@foreach ( $products as $product )
<div class="col-4">

 <img src="img/Product-9.jpg">

 <div class="text" > {{ $product->created_at->format('d/m/Y') }} </div>
   <h4>{{ $product->title }}</h4>
   <p class="mb-auto text-muted">{{ $product->subtitle }}</p>
   <div class="rating">
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
   </div>
   <a href="{{ route('products.show', $product->slug) }} " class="stretched-link btn btn-info">Show</a>
   <p>{{ $product->getPrice()}}</p>
  </div>
@endforeach
</div>


<!--------latest Products----->



<h2 class="title">latest Products</h2>
<div class="row">
 @foreach ($products as $product )

 <div class="col-4">

     <img src="img/Product-11.jpg">

       <div class="text" > {{ $product->created_at }} </div>
       <h4>{{ $product->title }}</h4>
       <p class="mb-auto text-muted">{{ $product->subtitle }}</p>
       <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
       </div>
       <a href="{{ route('products.show', $product->slug ) }}" class="stretched-link btn btn-info">Show</a>
        <p>{{ $product->getPrice() }}</p>
     </div>

 @endforeach

 @if (session('success'))

 <div class="alert alert-success">
     {{ session('successfully') }}
 </div>


 @endif
@endsection

