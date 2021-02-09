
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <link rel="stylesheet" type="text/css" href="toast-plugin/jquery.basic.toast.css" />
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script> -->
<script type="text/javascript" src="toast-plugin/jquery.basic.toast.js"></script>
  

  
<link rel = "stylesheet" href = "css/transactions.css">
<script src="js/transactions.js"></script>

  

 
<title>TRANSACTIONS</title>





</head>

<body>
   <?php include 'header.php';?>
   <div class="container-fluid table-responsive">
  <div class = "row">

   <div class="col-sm-3"> <h1>TRANSACTIONS</h1></div>
   
<!-- 
   <div class="col-sm-2 box"> 
   <form class="form-inline">
   <label for="name" style = "color:white;">Budget</label> 

   
    <input  id = "budgetamount" class = "form-control"type="text"/> 
    
    <form>
    </div> -->
   <div class="col-sm-3"> <h4>Total budget: <span id ="totalamount" class="badge badge-secondary">0</span></h4></div>
   <div class="col-sm-3"> <h4>Available budget: <span id ="budgetamount" class="badge badge-secondary">0</span></h4></div>

   

   
   
   
  


	 <div class="col-sm-3 d-flex justify-content-end"> <button type="button" class="btn btn-dark "data-toggle="modal"data-target="#myModal" onclick = "hidebuttonFunction()">ADD</button></div>
   
    </div>
	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">TRANSACTIONS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="container modal-body">
       <form id = "form">
	   
	   
	   
                    <div class = "row justify-content-center modalpad">
                      <div class = "col-sm-3"> <label for="name">Name</label> </div>
                        
                      <div class = "col-sm-7">   <input  id = "name" class = "form-control"type="text" name="name" id="name" />  </div>
                    </div>
					
                    <div class = "row justify-content-center modalpad">
                       <div class = "col-sm-3"> <label for="amount">Amount</label> </div>
                        
                        <div class = "col-sm-7"> <input  id = "amount" class = "form-control"type="number" name="number" id="number" /> </div>
                    </div>
					
                        <div class = "row justify-content-center modalpad">
                         <div class = "col-sm-3"> <label for="date">Date</label> </div>
                        
                          <div class = "col-sm-7"><input  id = "date" class = "form-control" type="text" name="phone"  /> </div>
                          <input type="hidden" id="transactionId" name="transactionId" />
                    </div>
					
					 <div class = "row justify-content-center modalpad">
					
                       <div class = "col-sm-3">  <label for="category">category</label> </div>
                        
                        <div class = "col-sm-7">  <select  id = "category" class = "form-control" id="category" name="category">
    <option value="Housing">Housing</option>
    <option value="food">food</option>
    <option value="Childcare">Child care</option>
    <option value="Debt">Debt</option>
    <option value="Health care">Health care</option>
    <option value="Transportation">Transportation</option>
    <option value="Personal care">Personal care</option>
    <option value="Pet care">Pet care</option>
    <option value="Entertainment">Entertainment</option>
    <option value="Miscellaneous">Miscellaneous</option>
  </select></div>
                  </div>  
                    
                        
                     
             </form>
                
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button id = "submit" type="button" class="btn btn-dark" onclick="insertData()">Submit</button>
		 <button id ="clear" type="button" class="btn btn-danger"  onclick="clearAll()">Clear</button>
     <button id ="edit" type="button" class="btn btn-success"  onclick="Edit()">Update</button>
      </div>

    </div>
  </div>
</div>


 
 
 
  <div class = "row">
  
  <table class="table table-bordered" id = "userTable">
 
  
  
    <thead class="thead-dark">
      <tr>
       <!-- <th data-visible="false" style="text-align:center;">ID</th>  -->
        <th style="text-align:center">NAME</th>
        <th style="text-align:center">AMOUNT</th>
		<th style="text-align:center">CATEGORY</th>
    <th style="text-align:center">DATE</th>

		<!-- <th>Created_by</th>
		<th>Created_on</th>
    <th>Updated_by</th>
    <th>Updated_on</th> -->
    <th style="text-align:center">Actions</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  </div>
  </div>




<?php include 'footer.php';?>




</body>
</html>