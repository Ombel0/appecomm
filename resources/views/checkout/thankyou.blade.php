@extends('layouts.master')

@section('content')


<div class="col-md-12">
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank you!</h1>
       <h2> <p class="lead"><strong>Your order has been processed successfully </strong></p> </h2>
        <hr>
        <p>
           <h3> Having a problem? <a href="#">Contact us</a></h3>  
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}" role="button">
                Continue to shop</a>
        </p>
    </div>
</div>
@endsection
