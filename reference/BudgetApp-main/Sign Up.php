<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="toast-plugin/jquery.basic.toast.css" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript" src="toast-plugin/jquery.basic.toast.js"></script>  
  
  <script src="js/registration.js"></script>
    
<link rel = "stylesheet" href = "css/form.css">
 
<title>SIGN UP</title>
</head>
<body>

<div style = "text-align:center;"><h1 style = "color:white;">BudgetApp</h1></div>

<div class= "container box ">
 <form class= "formpad " >
	   
	   
	   
                    <div class = "row modalpad ">
                      <div class = "col-sm-2"> <label for="name">Name</label> </div>
                        
                      <div class = "col-sm-6">   <input  id = "registrationName" class = "form-control"type="text"/>  </div>
                    </div>
					
					<div class = "row  modalpad ">
                         <div class = "col-sm-2"> <label for="date">D.O.B</label> </div>
                        
                          <div class = "col-sm-6" >
                            <input class="form-control" id="registrationDob" placeholder="MM/DD/YYYY" type="text" onchange="AgeCalculator()"/></div>
                    
                    </div>
					
                    <div class = "row  modalpad ">
                       <div class = "col-sm-2"> <label for="age">Age</label> </div>
                         <div class = "col-sm-6"> <label id = "registrationAge" for="age">00</label> </div>
                        
                        
                    </div>
					
					 <div class = "row modalpad ">
                       <div class = "col-sm-2"> <label for="sex">SEX</label> </div>
					   
					                   <div class = "col-sm-3">
       <label class="form-check-label" for="male">
        <input type="radio"  id="male" name="sex" value="male" checked>Male
      </label>
    </div>
 
       <label class="form-check-label" for="female">
        <input type="radio"  id="female" name="sex" value="female">Female
      </label>



</div>
					   
					   
					   
      
 
  <div class = "row modalpad ">
                       <div class = "col-sm-2"> <label for="email">EMAIL</label> </div>
                        
                        <div class = "col-sm-6"> <input  id = "registrationEmail" class = "form-control"type="email" oninput= "ValidateEmail()"> 
                          <p id = "message"></p>
               </div>
                    </div>
					
					<div class = "row  modalpad ">
                       <div class = "col-sm-2"> <label for="mobile">Mobile</label> </div>
                        
                        <div class = "col-sm-6"> <input  id = "registrationMobile" class = "form-control"type="number" name="mobile"  oninput= "ValidatePhonenumber()" > 
                        <p id = "Mobilemessage"></p>
                        </div>
                    </div>
					
					
					
  <div class = "row modalpad ">
                       <div class = "col-sm-2"> <label for="password">Enter Password</label> </div>
                        
                        <div class = "col-sm-6"> <input  id = "registrationPassword" class = "form-control"type="password" name="password"  /> </div>
                    </div>


 <div class = "row  modalpad ">
                       <div class = "col-sm-2"> <label for="cpassword">Confirm Password</label> </div>
                        
                        <div class = "col-sm-6"> <input  id = "cpassword" class = "form-control"type="password" name="cpassword"  /> </div>
                    </div>	

 <div class = "row modalpad ">
                       <div class = "col-sm-2"> <label for="cpassword">Module</label> </div>


<div class="form-check-inline">
  <label class="form-check-label" for = "op1">
    <input id = "op1" type="checkbox" class="form-check-input" value="budget">Budget
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label" for = "op2">
    <input  id = "op2"  type="checkbox" class="form-check-input" value="calculator">Calculator
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label" for = "op3">
    <input  id = "op3"  type="checkbox" class="form-check-input" value="option3" >Option 3
  </label>
</div>

</div>


     <div class = "row modalpad ">
                       <div class = "col-sm-2"> <label for="sex">Marital Status</label> </div>
             
                             <div class = "col-sm-3">
      <label class="form-check-label" for="single">
        <input type="radio"  id="single" name="status" value="single" checked>Single
      </label></div>
 
      <label class="form-check-label" for="married">
        <input type="radio"  id="married" name="status" value="married">Married
      </label>



</div>



 
 <div class = "row  modalpad ">
			 <div class = "col-sm-6"></div>
<div class = "col-sm-6"	>

<button  id = "submit" type="button" class="btn btn-success" onclick="insertdata()">Submit</button>
<button id = "clear" type="button" class="btn btn-secondary" onclick="clearAll()">Clear</button>
<button id = "clear" type="button" class="btn btn-secondary" onclick="location.href = 'index.php';">Back</button>

</div>		 
					
	</div>				
					
					</div>
                        
					
					</form>

</div>

<?php include 'footer.php';?>

</body>
</html>