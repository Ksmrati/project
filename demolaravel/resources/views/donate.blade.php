<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
          <script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="<color-
code>" bolt-logo="<image path>"></script>
        <!-- Styles -->
     <style>
   @import url("https://fonts.googleapis.com/css?family=Kavivanar");

* {
  margin: 0;
  padding: 0;
  user-select: none;
}

body {
  font-family: "Kavivanar", cursive;
  background: #c4e0e5;
}

.wrapper {
  margin: 0px auto 0;
  width: 100%;
  max-width: 680px;
  padding: 20px;
  box-sizing: border-box;
}

/* content */
.content {
  text-align: center;
}

.content h1 {
  letter-spacing: 1px;
}


/* form */
.form {
  width: 100%;
  margin: 25px 0;
}

.top-form,
.middle-form,
.bottom-form {
  width: 100%;
  min-height: 65px;
  margin: 10px 0;
}

.form input[type="text"],
.form textarea {
  border: 2px solid #fff;
  padding: 10px 5px;
  outline: none;
  border-radius: 2px;
  width: 100%;
  transition: all 0.2s ease;
}

.form input:focus,
.form textarea:focus {
  border-color: #4ca1af;
  outline: none;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.0125),
    0 0 8px rgba(76, 161, 175, 0.5);
}

.form .label {
  margin-bottom: 5px;
  text-transform: capitalize;
}

/* top-contact */
.top-form .inner-form {
  width: 29.9%;
  float: left;
  margin-right: 5%;
}

.top-form .inner-form:last-child {
  margin-right: 0;
}


/* middle-form */
.middle-form {
  clear: both;
}

/* bottom-form */
.bottom-form textarea {
  height: 80px;
}

.btn {
  background: #4ca1af;
  width: 200px;
  padding: 10px 0;
  border-radius: 2px;
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 5px;
  cursor: pointer;
}

::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  font-family: "Kavivanar", cursive;
}
::-moz-placeholder {
  /* Firefox 19+ */
  font-family: "Kavivanar", cursive;
}
:-ms-input-placeholder {
  /* IE 10+ */
  font-family: "Kavivanar", cursive;
}

@media screen and (max-width: 460px) {
  .top-form .inner-form {
    width: 100%;
    margin: 5px 0;
  }
  .top-form,
  .middle-form,
  .bottom-form {
    margin: 5px 0;
  }
  .form {
    margin-top: 10px;
  }
}

</style>
    </head>
    
    <body>
        


<div class="wrapper">
  <div class="content">
    <h1>Donate Now</h1>
    <p>Connect with us by sending your views.</p>
  </div>

   {!!Form::open(['class'=>'form','files'=>true])!!}


    <div class="middle-form">
      <div class="inner-form">
        <div class="label"><h5>Enter Amount to Pay</h5></div>
        <input type="text" name="amount" placeholder="Enter Amount in Rs.">
      </div>
    </div>
    <br>
    <div class="label"><h5>Give us some other details</h5></div>
    <div class="top-form">
      
      <div class="inner-form">
        <div class="label">name</div>
        <input type="text" name="name" required="" placeholder="Enter your Name">
      </div>
      <div class="inner-form">
        <div class="label">email</div>
        <input type="text" name="email" required="" placeholder="Enter your Email">
      </div>
      <div class="inner-form">
        <div class="label">Mobile No.</div>
        <input type="text" name="mobile_no" required="" placeholder="Enter your Mobile No.">
      </div>
    </div>

    

    <div class="bottom-form">
      <div class="inner-form">
        <div class="label">message</div>
        <textarea name="message" placeholder="Give some message"></textarea>
      </div>
    </div>

   
              <div>
                <center><button type="submit" class="btn">Donate Now</button></center>
              </div>
  {!!Form::close()!!}
  </div>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
