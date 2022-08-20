@extends('layouts.master')

{{-- scripte js stripe --}}

@section('extra-script')


<script src="https://js.stripe.com/v3/"></script>

@endsection


{{-- display product --}}

@section('content')
<div class="col-md-12">
    <h1> Payment </h1>
    <div class="row">

        <div class="col-md-6">
           <form action=""  class="my-4" method="post" id="payment-form" >
            <div class="form-row">
                <label for="card-element">
                  Credit or debit card
                </label>
                <div id="card-element">
                  <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
              </div>

                <button class="btn btn-success btn-block mt-4" id="submit"> proceed to payment </button>
           </form>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script>

var stripe = Stripe('pk_test_51LXpi7DBv1BdzorIHTciQEwi9nbkAZ16ozMPbc8AsW7cqb4XNndVoxLbSfLInw0KkPFsThk7o84Cht9e2A3aVeCB00IJMy7u73');
var elements = stripe.elements();

 // Custom styling can be passed to options when creating an Element.
var style = {
  base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
  },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');





// Create a token or display an error when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the customer that there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.

      stripeTokenHandler(result.token);
    }
  });
});


// SUBMIT 

    var submitButton = document.getElementById('submit');

    submitButton.addEventListener('click', function(ev) {
        ev.preventDefault();

    stripe.confirmCardPayment("{{ $clientSecret }}",{    //SECRET KEY
        payment_method: {
            card: card
        }

        }).then(function(result) {
            if (result.error) {
            // Show error to your customer (e.g., insufficient funds)

            console.log(result.error.message);
            } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {


                  console.log(result.paymentIntent);
                }
            }
        });
    });
</script>
@endsection
