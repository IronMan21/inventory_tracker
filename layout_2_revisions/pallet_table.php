<?php include "config/config.php" ?>
<?php  include "libraries/Database.php" ?>
<?php 
	// database object
	$db = new Database();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Pallet Table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<!-- Font awesome -->
	<script src="https://use.fontawesome.com/41354cab82.js"></script>
	<link rel="stylesheet" type="text/css" href="css/pallet_table.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12" id="btn1">
			  		<a href="index.php"><button type="button" class="btn btn-danger navbar-btn btn-group-justified"><i class="fa fa-home" aria-hidden="true"></i>
					Home</button></a>
			  	</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
				  	<a href="search_menu.php"><button type="button" class="btn btn-info navbar-btn btn-group-justified" id="btn2"><i class="fa fa-search" aria-hidden="true"></i> Search</button></a>
				</div>					
			</div>
	  </div>
	</nav>



	<div class="container">
		<div class="panel panel-info">
		 	<!-- Default panel contents -->
			<div class="panel-heading">Pallet Inventory Information</div>
			<!-- Table -->
			<table class="table" border = 1>
		  		<tr>
		  			<td id="header1">Pallet Number</td>
		  			<td id="header2">Pallet Information</td>
		  		</tr>
		  		<tr class="info">
		  			<td id="pallet_num"><a href="edit_specific_pallet.php"> 1 </a></td>
		  			<td>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>SKU</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item">Displays Sku number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>Aisle</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Aisle number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>Bay</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Bay number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12col-xs-12">
			  					<p>Department</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Department number info</li>
	  							</ul>
			  				</div>
			  			</div>
		  			</td>
		  		</tr> <!-- end tr -->
		  		<tr class="info">
		  			<td id="pallet_num"><a href="edit_specific_pallet.php"> 2 </a></td>
		  			<td>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>SKU</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item">Displays Sku number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>Aisle</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Aisle number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12 col-xs-12">
			  					<p>Bay</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Bay number info</li>
	  							</ul>
			  				</div>
			  			</div>
			  			<div class="row">
			  				<div class="col-lg-2 col-md-12col-xs-12">
			  					<p>Department</p>
			  				</div>
			  				<div class="col-lg-10 col-md-12 col-xs-12">
			  					<ul class="list-group">
	  								<li class="list-group-item"> Displays Department number info</li>
	  							</ul>
			  				</div>
			  			</div>
		  			</td>
		  		</tr>	<!-- end tr -->





			</table>
		</div>

	</div>

<!-- JavaScript -->
<script src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/pallet_table.js"></script>
</body>
</html>