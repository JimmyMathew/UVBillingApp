jQuery(document).ready(function($){

    
    
    

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
                
                    "<td  align='center'>" + id + "</td>" +
                    "<td  align='center'>" + code + "</td>" +
					"<td  align='center'>" + name + "</td>" +
					"<td  align='center'>" + rate + "</td>" +
					
					"</tr>";
					TableData= TableData + tr_str;
			}
			
				$("#itemsTable tbody").html(TableData );
			
}
			  
