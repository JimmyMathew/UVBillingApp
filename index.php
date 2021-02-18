<?php include 'header.php';?>

	<!-- The Modal -->
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ITEMS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="container modal-body">
       <form id = "form">
	   
                   <div class = "row justify-content-center modalpad">
                       <div class = "col-sm-3"> <label for="itemCode">Code</label> </div>
                        
                        <div class = "col-sm-7"> <input  id = "itemCode" class = "form-control"type="number"/> </div>
                    </div>
	   
                    <div class = "row justify-content-center modalpad">
                      <div class = "col-sm-3"> <label for="itemName">Name</label> </div>
                        
                      <div class = "col-sm-7">   <input  id = "itemName" class = "form-control"type="text" />  </div>
                    </div>

                    <div class = "row justify-content-center modalpad">
                       <div class = "col-sm-3"> <label for="itemRate">Rate</label> </div>
                        
                        <div class = "col-sm-7"> <input  id = "itemRate" class = "form-control"type="number"/> </div>
                        <input type="hidden" id="itemId" name="itemId" />
                    </div>
					
                    
					
                       
				
                      



                    
                    
                    
                        
                     
             </form>
                
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button id = "submit" type="button" class="btn btn-dark" onclick="insertItemsData()">Submit</button>
		  <button id ="clear" type="button" class="btn btn-danger"  onclick="clearAll()">Clear</button>
     <button id ="edit" type="button" class="btn btn-success"  onclick="Edit()">Update</button> 
      </div>

    </div>
  </div>
</div>



<table class="table table-bordered table-striped display responsive nowrap" style="width:100%"id = "dataTable">
  <thead>
    <tr>
   
      <th  scope="col">Code</th>
      <th  scope="col">Name</th>
      <th  scope="col">Rate</th>
      <th  scope="col">Actions</th>
      <!-- <th style="text-align:center" scope="col">Actions</th> -->
    </tr>
  </thead>
  <tbody></tbody>
</table>

<?php include 'footer.php';?>