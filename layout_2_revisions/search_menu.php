<!DOCTYPE html>
<html>
<head>
	<title>Search Menu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<!-- Font awesome -->
	<script src="https://use.fontawesome.com/41354cab82.js"></script>
	<link rel="stylesheet" type="text/css" href="css/search_menu.css">

</head>
<body>
	<div class="container" style="background-color: #666">
		<h1>Search By Category</h1>
		<p id="underline"></p>
		<form accept-charset=utf-8 >
			<div class="row" id="checkbox">  <!-- Pallet Type -->
			<div class="col-lg-6 col-md-6 col-xs-12" id="single_sku">
				<span class="label label-primary">Single SKU <input type="checkbox" aria-label="..."></span>
			</div>
			<div class="col-lg-6 col-md-6 col-xs-12" id="multi_sku">
				<span class="label label-primary">Mulitiple SKU <input type="checkbox" aria-label="..."></span>
			</div>
			</div>
			<div class="row">  <!-- Aisle -->
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="Aisle">
					<p>Aisle</p>
				</div>
				<div class="col-lg-7 col-md-7 col-xs-12">
					<div class="input-group input-group-lg">
					  	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-check" id="aisleCheck" aria-hidden="true"></i></span>
					  	<input id="aisleInput" type="text" class="form-control" placeholder="Aisle Number" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
			</div>
			<div class="row">  <!-- Bay -->
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="Bay">
					<p>Bay</p>
				</div>
				<div class="col-lg-7 col-md-7 col-xs-12">
					<div class="input-group input-group-lg">
					  	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-check" id="bayCheck" aria-hidden="true"></i></span>
					  	<input id="bayInput" type="text" class="form-control" placeholder="Bay Number" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
			</div>
			<div class="row">  <!-- Pallet Number -->
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="Pallet_Num">
					<p>Pallet Number</p>
				</div>
				<div class="col-lg-7 col-md-7 col-xs-12">
					<div class="input-group input-group-lg">
					  	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-check" id="palletCheck" aria-hidden="true"></i></span>
					  	<input id="palletInput" type="text" class="form-control" placeholder="Pallet Number" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
			</div>
			<div class="row">  <!-- Department -->
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
				<div class="col-lg-3 col-md-3 col-xs-12" id="Department">
					<p>Department</p>
				</div>
				<div class="col-lg-7 col-md-7 col-xs-12">
					<div class="input-group input-group-lg">
					  	<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-check" id="departmentCheck" aria-hidden="true"></i></span>
					  	<input id="departmentInput" type="text" class="form-control" placeholder="Department Number" aria-describedby="sizing-addon1">
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-xs-1"></div>
			</div>
			<div class="row" id="lastRow">  <!-- Submit button and Home Button -->
				<div class="col-lg-3 col-md-3 col-xs-3"></div>
				<div class="col-lg-3 col-md-3 col-xs-3">
					<a href="index.php"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a>
				</div>
				<div class="col-lg-3 col-md-3 col-xs-3">
					<a href="pallet_table.php"><button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check-square-o" aria-hidden="true"></i>
					 Submit</button></a>
				</div>
				<div class="col-lg-3 col-md-1 col-xs-3"></div>
			</div>
		</form>
	</div>


<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous">
</script>
<!-- JavaScript -->
<script src="js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="js/search_menu.js"></script>
</body>
</html>