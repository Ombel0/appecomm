<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <!-- <link rel="stylesheet" href="style.css" />-->


        <style>
        *
        {
        margin: 0;
        padding:0 ;
        box-sizing: border-box;
        }
        .bel h1
        {
        width: 100%;
        color:#008080;
        }
        body
        {
        font-family: 'Poppins','sans-serif;';
        }
        .navbar{
        display: flex;
        align-items: center;
        padding: 20px;
        }
        nav
        {
            flex: 1;
            text-align: right;
        }
        nav ul
        {
            display: inline-block;
            list-style-type: none;
        }
        nav ul li
        {
        display: inline-block;
        margin-right: 20px;
        }
        a
        {
            text-decoration: none;
            color: #555;
        }
        p
        {
            color: #555;
        }

        .container
        {
        max-width: 1300px;
        margin: auto;
        padding-left: 25px;
        padding-right: 25px;

        }
        .row
        {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-around;
        }
        .col-2
        {
            flex-basis: 50%;
            min-width: 300px;
        }
        .col-2 img
        {
            max-width: 100%;
            padding: 50px 0;
        }
        .col-2 h1
        {
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }

        .btn
        {
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
            transition: background 0.5s;
        }

        .btn:hover
        {
        background: #563434;
        }
        .header
        {
            background: radial-gradient(#fff,#ffd6d688);
        }
        .header .row
        {
        margin-top:70px;
        }
        .categorie
        {
        margin: 70px 0;
        }
        .col-3
        {
        flex-basis: 30%;
        min-width: 250px;
        margin-bottom: 30px;
        }
        .col-3 img
        {
        width: 100%;
        }
        .small-container
        {
            max-width: 1080px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .col-4
        {
        flex-basis:25%;
        padding:10px;
        min-width:200px;
        margin-bottom:50px;
        transition: transform 0.5s;
        }
        .col-4 img
        {
        width: 100%;
        }
        .title
        {
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height:60px ;
            color: #555;
        }
        .title::after
        {
            content:'';
            background: #ff523b;
            max-width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        h4
        {
            color: black;
            font-weight: normal;
        }
        .col-4 p
        {
        font-size: 14px;
        }
        .rating .fa
        {
        color: #ff523b;
        }

        .col-4:hover
        {
            transform: translateX(-5px);
        }

        /*------offer------*/
        .offer
        {
            background:radial-gradient(#fff,#ffd6d6);
            margin-top: 80px;
            padding: 30px 0;
        }

        /*------testimonial------*/
        .testimonial
        {
        padding-top: 100px;
        }

        .testimonial .col-3
        {
        text-align: center;
        padding: 40px 20px;
        box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: transform 0.5s;
        }
        .testimonial .col-3:hover
        {
            transform: translateX(-10px);
        }

        .testimonial .col-3 img
        {
        width: 50px;
        margin-top: 20px;
        border-radius: 50%;
        }
        .fa .fa-quote-left
        {
        font-size: 39px;
        color: #ff523b;
        }
        .col-3 p
        {
            font-size: 12px;
            margin: 12px 0;
            color: #777;
        }
        .testimonial.col-3 h3
        {
            font-weight: 600;
            color: #555;
            font-size: 16px;
        }

        /*------testimonial------*/

        .brands
        {
        margin: 100px auto;
        }
        .col-5
        {
        width: 160px;
        }
        .col-5 img
        {
        width: 100%;
        cursor: pointer;
        filter: grayscale(100%);
        }
        .col-5 img:hover
        {
        filter: grayscale(0);
        }


        /*------fotter------*/

        .footer
        {
            background: #000;
            color: #8a8a8a8a;
            font-size: 15px;
            padding:60px 0 20px ;
        }

        .footer p
        {
        color: #8a8a8a8a;
        }
        .footer h3
        {
        color: #fff;
        margin-bottom: 30px;
        }
        .footer-col-1, .footer-col-2,.footer-col-3, .footer-col-4
        {
        min-width: 250px;
        margin-bottom: 20px;
        }
        .footer-col-1
        {
        flex-basis: 30%;
        }
        .footer-col-2
        {
        flex: 1;
        text-align: center;
        }

        .footer-col-2 img
        {
        width: 180px;
        margin-bottom:20px;
        }

        .footer-col-3, .footer-col-4
        {
            flex-basis: 12%;
            text-align: center;
        }
        ul
        {
            list-style-type: none;
        }

        .app-logo
        {
            margin-top: 20px;
        }
        .app-logo img
        {
        width: 140px;
        }
        .footer hr
        {
            border: none;
            background: #b5b5b5;
            height: 1px;
            margin: 20px 0;
        }
        .copyright
        {
        text-align: center;
        }

</style>

        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>BELSTORE /Ecommerce</title>
    </head>
<body>
    <div class="header">
 <div class="container">
        <div class="navbar">
          <div class="logo">
             <div class="bel"><h1>BELSHOOOP</h1></div>
          </div>
      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Products</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Account</a></li>
        </ul>
    </nav>
    <a href=""><img src="img/cart.png" width="30px" height="30px">Cart<span class="badge badge-pill badge-dark">[{{ Cart::count() }}]</span></a>


   </div>
   <div class="row">
    <div class="col-2">
        <h1>New Style<br>BELSHOOOP</h1>
        <p>Success isn't always what it seems.<br>Greatness you are welcome.</p><a href="" class="btn">Explore Now &#8594</a>
    </div>
    <div class="col-2">
      <img src="img/image11.png">
    </div>

   </div>
 </div>
</div>

<!--------featured categories----->
<div class="categories">
    <div class="small-container">
      <div class="row">
       <div class="col-3">
           <img src="img/category-1.jpg">
       </div>
       <div class="col-3">
          <img src="img/category-2.jpg">
       </div>
       <div class="col-3">
         <img src="img/category-3.jpg">
       </div>
    </div>

    </div>
</div>


<!--featured products-->
 <div class="small-container">
      <h2 class="title">Featured Products</h2>
       <div class="row">


        <!-- index.blade.php -->


        @yield('content')


       <!-- index.blade.php -->




       </div>
 </div>
 <!--------offers----->


@if (session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>


@endif


 <div class="offer">
     <div class="small-container">
        <div class="row">
          <div class="col-2">
              <img src="img/III.png"class="offer-img">
          </div>
              <div class="col-2">
               <p>Exclusively Available on Belshooop</p>
                <h1>Smart Bnad 2021</h1>
               <small>The mi smart bad E18 features a 30.9% larger</small>
               <a href=""class="btn">Buy Now &#8594;</a>
              </div>
       </div>
     </div>
   </div>
   <!--------TEST IMONIAL----->
   <div class="testimonial">
     <div class="small-container">
         <div class="row">
             <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                 <p>lorem ipsum is simply dummy test of the printing and typesetting</p>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
               </div>
               <img src="img/user-1.png">
               <h3>Angel hellena</h3>
             </div>
              <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                 <p>lorem ipsum is simply dummy test of the printing and typesetting</p>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
               </div>
               <img src="img/user-2.png">
               <h3>Alex</h3>
             </div>
              <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                 <p>lorem ipsum is simply dummy test of the printing and typesetting</p>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
               </div>
               <img src="img/user-3.png">
               <h3>Sandra</h3>
             </div>
         </div>
     </div>
   </div>
     <!--------brands----->
     <div class="brands">
     <div class="small-container">
        <div class="row">
        <div class="col-5">
            <img src="img/logo-godrej.png">
        </div>
        <div class="col-5">
            <img src="img/logo-coca-cola.png">
        </div>
        <div class="col-5">
            <img src="img/logo-oppo.png">
        </div>
        <div class="col-5">
            <img src="img/logo-paypal.png">
        </div>
        <div class="col-5">
            <img src="img/logo-philips.png">
        </div>
        </div>
     </div>
     </div>
     <!--------footer----->
     <div class="footer">
         <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download Our App</p>
                    <div class="app-logo">
                       <img src="img/play-store.png">
                       <img src="img/app-store.png">
                    </div>
                </div>
                <div class="footer-col-2">
               <!----<img src="img/logo6.jpg">--->
               <div class="bel"><h1>BELSHOOOP</h1></div>
                    <p>Download Our App</p>
                </div>
                <div class="footer-col-3">
                 <h3>Download Our App</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliat</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                 <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
         </div>

       <p class="copyright">&copy2021; OMAR BELGHALI . wwww.omarbelghali.com</p>

     </div>
</body>
</html>
