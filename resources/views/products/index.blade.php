@extends('layouts.master')


@section('content')

@foreach ( $products as $product )
<div class="col-4">

    <img src="{{ asset('storage/'.$product->image) }}">

 <div class="text" > {{ $product->created_at->format('d/m/Y') }} </div>
<!--category-->


 <strong class="d-inline-block mb-2">


    @foreach ($product->categories as $category)
        {{ $category->name }}{{ $loop->last ?'': ', ' }}

    @endforeach
  </strong>

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


<div class="d-flex justify-content-center">        <!-- search product and link -->
    {!! $products->appends(request()->input())->links() !!}
   </div>


</div>



<!--------latest Products----->



<h2 class="title">latest Products</h2>
<div class="row">
 @foreach ($products as $product )

 <div class="col-4">

     <img src="{{ asset('storage/'.$product->image) }}">

       <div class="text" > {{ $product->created_at }} </div>
<!--category-->
       <strong class="d-inline-block mb-2">
        @foreach ($product->categories as $category)
            {{ $category->name }}{{ $loop->last ?'': ', ' }}
        @endforeach
      </strong>

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


 <div class="d-flex justify-content-center">        <!-- search product and link -->
    {!! $products->appends(request()->input())->links() !!}
   </div>

 @if (session('success'))

 <div class="alert alert-success">
     {{ session('successfully') }}
 </div>

 @endif

@endsection

