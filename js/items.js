jquery(document).ready(function($){
	
    
    
    

	$.ajax(
		{
        url: 'bl/items-bl.php?function=readfunction',
		type: 'get',
        dataType: 'JSON',
        success: function(response){
			RefreshTable(response);
			},		
		error: function (request, error) {
			console.log(arguments);
		}
		});

	});	

			   
		   	
              
              
function RefreshTable(response)
{
	var length = response.length;
	var TableData = "";

	
	   
			for(var i=0; i<length; i++)
			{
                var id = response[i].id;
                 var code = response[i].code;
                var name = response[i].name;
				var rate = response[i].rate;
			 

				var createdby = response[i].createdby;
				var createdon = response[i].createdon;
				var updatedby = response[i].updatedby;
				var updatedon = response[i].updatedon;

                var tr_str = "<tr class = 'item'>" +
                
                   // "<td  align='center'>" + id + "</td>" +
                    "<td  align='center'>" + code + "</td>" +
					"<td  align='center'>" + name + "</td>" +
					"<td  align='center'>" + rate + "</td>" +
					"<td align='center'><a href='#' data-toggle='modal' data-target='#myModal' id='edit"+id+"' onclick ='showInModal("+id+")'><i class='fa fa-pencil' style='font-size:36px;'  aria-hidden='true'></i></a><a href='#' id='delete"+id+"'  onclick ='deleteItem("+id+")' ><i class='fa fa-trash' style='font-size:36px;padding-left:25px;' aria-hidden='true'></i></a></td>"+
					
					"</tr>";
					TableData= TableData + tr_str;
			}
			
				$("#itemsTable tbody").html(TableData );
			
}



function insertItemsData()
{

  
	var name = $("#itemName").val();
	var code = $("#itemCode").val();
	var rate = $("#itemRate").val(); 

//    if (name == "" || name == null || name == undefined){
// 	   $.Toast('Please enter your name', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
//    }
//    else if (date == "" || date == null || date == undefined){
// 	   $.Toast('Please enter the Date', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
//    }
// 	   else if (amount == "" || amount == null || amount == undefined){
// 		   $.Toast('Please enter the amount', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
//    }
  
//    else {

	  var itemInsertObj = {name:name, code:code , rate:rate};
	  var itemsFormDataStringified = JSON.stringify(itemInsertObj);
	   $.ajax({
		  url: 'bl/items-bl.php?function=insertFunction',
		  type: 'post',
		   data:{itemsFormData:itemsFormDataStringified},
		   dataType: 'JSON',
		  success: function (response) {
				
	   
			  RefreshTable(response);
			  //$.Toast('Transaction created successfully', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		   
		   
			  
		  },
		  error: function (request, error) {
			  console.log(arguments);
			   //alert(" Can't do because: " + error);
		  }
		  
			});
			$('#myModal').modal('hide');
		   
  }


function showInModal(id)
	{
		$("#edit").show();

		$("#submit").hide();
		 //var id = $("#edit"+id).closest("tr")[0].children[0].innerText;
		 var itemCode = $("#edit"+id).closest("tr")[0].children[0].innerText;
		 var itemName = $("#edit"+id).closest("tr")[0].children[1].innerText;

		 var itemRate = $("#edit"+id).closest("tr")[0].children[2].innerText;
		

		 $("#itemCode").val(itemCode);
		 $("#itemName").val(itemName);
		 $("#itemRate").val(itemRate);
		 $("#itemId").val(id);
		 
		

	}
	function Edit()
	{
		

		  
	var itemEditObj = {id:$("#itemId").val() ,name: $("#itemName").val(), code: $("#itemCode").val() ,rate: $("#itemRate").val()};
	var ItemFormDataStringified = JSON.stringify(itemEditObj);
	$.ajax({
		url: 'bl/items-bl.php?function=updateFunction',
		type: 'post',
		 data:{ItemEditFormData:ItemFormDataStringified},
		 dataType: 'JSON',
        //  cache: false,
        //  processData: false,
        //  contentType: false,
        
        success: function (response) {
			
			
			RefreshTable(response);
			
		},
		error: function (request, error) {
			console.log(arguments);
 			//alert(" Can't do because: " + error);
		}
		
		  });
		  $("#myModal").modal('hide');
    
	 }
	 

	function deleteItem(id)

	{
	
		

		$.ajax({
			url: 'bl/items-bl.php?function=deleteFunction',
			type: 'post',
			 data:{deleteitem:id},
			 dataType: 'JSON',
			//  cache: false,
			//  processData: false,
			//  contentType: false,
			
			success: function (response) {

				
			
		
				RefreshTable(response);
				
				
				
				

			},
			error: function (request, error) {
				console.log(arguments);
				 //alert(" Can't do because: " + error);
			}
			
			  });
	}


function clearAll()

{

   $("#itemName").val("");
   $("#itemCode").val("");
  $("#itemRate").val("");
 
		
		


}

			  
	
