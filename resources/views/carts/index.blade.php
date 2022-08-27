@extends('layouts.master')
<base href="/img" >

@section('content')

@if (Cart::count() > 0)
<style>body {
    background: #eecd;
    background: -webkit-linear-gradient(to right, #eecda3, #ef629f);
    background: linear-gradient(to right, #eecda3, #ef629f);
    min-height: 100vh;
  } </style>
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
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  @foreach (Cart::content() as $product )
          
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">


                        <img src="{{ $product->model->image }} " alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{ $product->model->title }}</a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong>{{ $product->model->getPrice()}}</strong></td>
                    <td class="border-0 align-middle"><strong>3</strong></td>
                    <td class="border-0 align-middle">

           <!--form destroy-->

                        <form action="{{ route('carts.destroy', $product->rowId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </form>

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
</div>
  @endif
@endsection
