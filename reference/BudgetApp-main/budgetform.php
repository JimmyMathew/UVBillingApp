<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" type="text/css" href="toast-plugin/jquery.basic.toast.css" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript" src="toast-plugin/jquery.basic.toast.js"></script>
  
<script src="js/budgetform.js"></script>
<link rel = "stylesheet" href = "css/budgetform.css">
<title>Budgetform</title>
</head>
<body> 

<?php include 'header.php';?>

	
    
        <div class="container">
            <div class="row text-white h-100 justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h1 class="display-4 py-2 text-truncate">Add Budget</h1>

                    <div class="px-2">
                        <form action="" class="justify-content-center">
                            <div class="form-group">
                            <input type="hidden" id="budgetId" name="transactionId" />
                                <input type="text" id = "budgetname" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                
                                <input type="number" id = "budgetamount" class="form-control" placeholder="Amount">
                            </div>
                            <div class="input-group">
  

    
    <div class="input-group-prepend">
      <span class="input-group-text">Month</span>
    </div>
     <input type="text" id ="month" class="form-control" readonly>
        
    
    
  
<div class="input-group-prepend">
      <span class="input-group-text">Year</span>
    </div>
     <input type="text" id ="year" class="form-control" readonly>

</div>

<br>



  



                            <button type="submit"  class="btn btn-dark " onclick="insertData()">Submit</button>
                           

                             
                        </form>
                       
                    </div>
                    <a href="budget.php">Go back to previous page.</a>
                </div>
            </div>
        </div>
    </div>



    <footer>

  

    
  <!-- Footer Links -->


  <div class="footer-copyright text-white text-center footercolor">

  <span class = "footerpad">  © 2020 Copyright:
    <a href="budget.html"> Budgetapp.com</a></span>
  </div>


</footer>
<!-- Footer -->



	</body>
</html>

