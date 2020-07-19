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
  text-align: center !important;
  background-color:#fff;

}

.content h1 {
  letter-spacing: 1px;
  margin-top: 60px;
   margin-bottom: 40px;
}

.invoice-head td {
  padding: 0 8px;
}
.container {
  padding-top:30px;
  padding-left: 30px;
  padding-bottom: 30px;
}
.invoice-body{
  background-color:transparent;
}
.invoice-thank{
  margin-top: 30px;
  padding: 5px;
}
address{
  margin-top:15px;
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



</style>
    </head>
    
    <body>
        


<div class="wrapper">
  <div class="content">
   
<div class="container">
    	
    	<div class="row">
    		<div class="span8">
    			<h2>Donation Invoice</h2>
    		</div>
    	</div>
    	<div class="row">
    		
    		
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
                          <th>Name</th>
							<th>Email id</th>
							<th>Mobile No.</th>
                          
							<th>Amount</th>
						</tr>
					</thead>
					<tbody>
						
					<tr>
						<td>{{$donate->name}}</td>
            <td>{{$donate->email}}</td>
            <td>{{$donate->mobile_no}}</td>
            <td>Rs. {{$donate->amount}}</td>
						
						</tr>
                          
					</tbody>
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You for your contribution!</h5>
  			</div>
  		</div>
  		
    </div>
    
              <div>
                <a href="http://demolaravel.smrati/"><button class="btn">Back to home</button></a>
              </div>
  </div>
</div>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>
