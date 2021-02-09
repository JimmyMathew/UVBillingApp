<?php
session_start();
?>
<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
   -->
   

  <!-- JS -->
 
<style>
 
.fa-cog {
  color:white;
} 
/* .icon-cog {
  color:white;
} */
</style>
</head>
<body>
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbot">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="budget.php">Budget</a>
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="transactions.php">Transactions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newCalculator.php">Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
       <div class = "collapse navbar-collapse justify-content-end">
        
       <?php   
       echo "<p style ='color:white;padding-top:21px;padding-right:16px'>Welcome ". strtoupper($_SESSION['name']). "</P> ";
       ?>
            <button data-toggle="tooltip" title="Edit Profile" onclick = "location.href = 'editRegistrationPage.php';" class="btn"><i class="fa fa-user fa-3x" style="color:white;"></i></button>
             <button data-toggle="tooltip" title="Log out" onclick = "logout()" class="btn"><i class="fa fa-sign-out fa-3x" style="color:white;"></i></button>
        
          </form>
        </div>
      </nav>
    <br>
    </body>
    <script>
    function logout(){
      $.ajax({
        url: 'BusinessLayer/loginBL.php?function=logoutfunc',
		type: 'get',
        
        success: function(response){
     
            window.location.replace("index.php");
            //$.Toast(response, {'duration': 3000, 'class': 'success', 'position':'top','align':'center'});;
            function preventBack() { 
            window.history.forward();  
        } 
          
        setTimeout("preventBack()", 0); 
          
        window.onunload = function () { null }; 
			},		
		error: function (request, error) {
			console.log(arguments);
			alert(" Can't do because: " + error);
        }
        
        
		
		  });

    }
    
    
    </script>
    </html>