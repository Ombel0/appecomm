@extends('layouts.master')
{{--  <base href="/img" >--}}

@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

@if (Cart::count() > 0)
<style>
body {
    background: Aqua;
    background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
    background: linear-gradient(to right, #eecda3, aqua);
    min-height: 90vh;
  }

  .p-2
  {
    flex-basis:50%;
        padding:15px;
        min-width:400px;
        margin-bottom:50px;

  }




  .p-1
  {
    color:chocolate;
    font-weight: 900;
    width:100%;
    background-color:#eecd;
    padding: 40px;
  }



  .p-9
  {
    font-weight: 900;
    width: 100px ;

    color:black;

    margin-right: 50px;
    margin-left: 70px;


  }


  table {
    border-collapse:separate;
    border:solid ivory;
    border-radius:6px;
}

td, th {
    border-left:solid khaki 2px;
    border-top:solid khaki 2px;
    border-right:solid khaki 2px;
}

th {

    background-color:palevioletred;
    border-top: none;
}

td:first-child, th:first-child {
     border-left: none;
}


.title
{
  color: ivory;

}


.price
{
  color: ivory ;
}
  </style>
    <div class="pb-5">

      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                     <div class="p-1"> Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-1">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-1">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-1">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  @foreach (Cart::content() as $product )

                  <tr  style=" align : center ; background-color: palevioletred ; ">
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="{{ asset('storage/'.$product->model->image) }} " alt="" width="300" class="img-fluid rounded shadow-sm">
                        <div class="p-3">
                          <h3 class="mb-0"> <a href="#" class="title">{{ $product->model->title }}</a></h3><span class="text-muted font-weight-normal font-italic d-block"></span>
                        </div>
                      </div>
                    </th>
                    <!--add to quantity -->
                      <!--rowId
define the id of the products that are in the carts  -->

                       <td>
                        <div class="p-9">
                          <div class="price"> {{ getPrice($product->subtotal()) }} </div>
                        </div>
                      </td>

                    <td>
                      <div class="p-9">
                        <select class="custom-select" name="qty" id="qty" data-id="{{ $product->rowId }}">
                            @for ($i = 1; $i <= 6; $i++)

                                <option value="{{ $i }}" {{  $i== $product->qty  ? 'selected' : ''}} >   {{ $i }}

                                </option>
                            @endfor
                        </select>
                      </div>
                    </td>


                    <td>
           <!--form destroy-->
                     <div class="p-9">
                        <form action="{{ route('carts.destroy', $product->rowId) }}" method="POST">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </form>
                    </div>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
            <div class="p-4">
              <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
              <div class="input-group mb-4 border rounded-pill p-2">
                <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                <div class="input-group-append border-0">
                  <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                </div>
              </div>
            </div>
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
            <div class="p-4">
              <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
              <textarea name="" cols="30" rows="2" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order commands </div>
            <div class="p-4">
              <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</strong><strong>{{getPrice(Cart::subtotal())  }}</strong></li>
              {{--  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; </strong><strong>$10.00</strong></li>--}}
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;{{getPrice(Cart::tax())}}</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                  <h5 class="font-weight-bold">{{getPrice(Cart::total())  }}</h5>
                </li>
              </ul><a href="{{ route('checkout.index') }}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  @else
<div class="col-md-12">
  <p>your cart is empty</p>
  <p>But you can visit the <strong><a href="{{ route('products.index') }}">boutique</a></strong> to do your shopping.
  </p>
</div>
  @endif
@endsection

@section('extra-js')

<script>

   var selects = document.querySelectorAll('#qty');
 Array.from(selects).forEach((element)=> {
element.addEventListener('change',function() {
    var rowId = this.getAttribute('data-id');
    var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    fetch(
        `/panier/${rowId}`,
                {

                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json, text-plain, */*",
                        "X-Requested-With": "XMLHttpRequest",
                        "X-CSRF-TOKEN": token
                    },
                    method: 'patch',
                    body: JSON.stringify({
                        qty: this.value
                    })
                }
            ).then((data) => {
                console.log(data);
                location.reload();
            }).catch((error) => {
                console.log(error);
            });
        });
    });


</script>

@endsection
