<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="toast-plugin/jquery.basic.toast.css" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript" src="toast-plugin/jquery.basic.toast.js"></script>
  <script src="js/budget.js"></script>

  
<link rel = "stylesheet" href = "css/budget.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/budget.js"></script>

  
<link rel = "stylesheet" href = "css/budget.css">
 
<title>BUDGET</title>
 




</head>

<body>
   <?php include 'header.php';?>
	  
	  <div class="container-fluid table-responsive">
  <div class = "row">
   
    <div class="col"> <h1>BUDGETS</h1></div>
	<div class="col"></div>
	<div class="col"></div>
	<div class="col"></div>
	<div class="col"></div>
	 <div class="col align-self-end"><h1> <button onclick = "window.location.href =' budgetform.php'"" type="button" class="btn btn-dark ">ADD</button></div>
    </div>
	


 
 
 
  <div class = "row">
  
  <table class="table table-bordered" id = "budgetTable">
 
  
  
    <thead class="thead-dark">
      <tr>
      <!-- <th>ID</th> -->
      <th style="text-align:center">NAME</th>
      <th style="text-align:center">AMOUNT</th>
		<th style="text-align:center">AVAILABLE AMOUNT</th>
    <th style="text-align:center">Month</th>
    <th style="text-align:center">Year</th>
		
    <!-- <th>Created_by</th>
		<th>Created_on</th>
    <th>Updated_by</th>
    <th>Updated_on</th> -->
		<th style="text-align:center">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
     
	 
    </tbody>
  </table>
  </div>
  </div>


<?php include 'footer.php';?>






</body>
</html>