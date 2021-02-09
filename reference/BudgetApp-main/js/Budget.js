$(document).ready(function()
{ 

 //Test 
// 	var date = new Date();

// 	switch (date.getMonth()) {
//   case 0:
//    $("#month").val("January"); ;
//     break;
//   case 1:
//      $("#month").val("February");
//     break;
//   case 2:
//      $("#month").val("March");
//     break;
//   case 3:
//    $("#month").val("April");
//     break;
//   case 4:
//     $("#month").val("May");
//     break;
//   case 5:
//     $("#month").val("June");
//     break;
//   case 6:
//    $("#month").val("July");
//     break;
//     case 7:
//   $("#month").val("August");
//     break;
//     case 8:
//    $("#month").val("September");
//     break;
//     case 9:
//    $("#month").val("October");
//     break;
//     case 10:
//    $("#month").val("November");
//     break;
//     case 11:
//     $("#month").val("December");
// }

// 	 $("#year").val(date.getFullYear());



	


	
	$.ajax({
        url: 'BusinessLayer/BudgetBL.php?function=readfunc',
		type: 'get',
        dataType: 'JSON',
        success: function(response){
            RefreshTable(response);
			},		
		error: function (request, error) {
			console.log(arguments);
      $.Toast(  " Can't do because:"  + error, {'duration': 1000, 'class': 'alert', 'position':'top','align':'center'});
        }
        
     
		
		  });
			  

        
	});
    function RefreshTable(response)
    {
        var len = response.length;
        var TableData = "";
                for(var i=0; i<len; i++)
                {
                    var id = response[i].id;
                    var name = response[i].name;
                    var amount = response[i].Amount;
                    var available_amount = response[i].available_amount;
                    var month = response[i].month;
                    var year = response[i].year;
                    var createdby = response[i].created_by;
                    var createdon = response[i].created_on;
                    var updatedby = response[i].updated_by;
                    var updatedon = response[i].updated_on;
    
                    var tr_str = "<tr class = 'item'>" +
                      // "<td align='center'>" + id + "</td>" +
                        "<td  align='center'>" + name + "</td>" +
                        "<td  align='center'>" + amount + "</td>" +
                        "<td  align='center'>" + available_amount + "</td>" +
                        "<td align='center'>" + month + "</td>" +
                        "<td align='center'>" + year + "</td>" +
                        // "<td align='center'>" + createdby + "</td>" +
                        // "<td align='center'>" + createdon + "</td>" +
                        // "<td align='center'>" + updatedby + "</td>" +
                        // "<td align='center'>" + updatedon + "</td>" +
                        "<td  align='center'><a href='#'  id='edit"+id+"' onclick ='showInForm("+id+")'><i class='fa fa-pencil' style='font-size:36px;'  aria-hidden='true'></i></a></td>"+
    
                        "</tr>";
                        TableData= TableData + tr_str;
                }  
                
                $("#budgetTable tbody").html(TableData );
                
    }


//      function insertData()
//   {
//   	 var name = $("#budgetname").val();
//     var amount = $("#amount").val();
//     var month = $("#month").val();
//     var year = $("#year").val();

//    if (name == "" || name == null || name == undefined)
//      {
// 		 alert( "Name field is empty");
//  		  $("#budgetname").focus();
// 	}
// 	else if (amount == "" || amount == null || amount == undefined)
// 	{
//  		 alert( "Amount field is empty");
//  		  $("#amount").focus();
//  	}
//    else 
//     {
// 		var myObj = {name:name, amount:amount,month:month,year:year};
// 		var budgetData = JSON.stringify(myObj);
//  		 $.ajax({
//  			url: 'BusinessLayer/BudgetBL.php?function=insertFunc',
//  			type: 'post',
// 			 data:{budgetData:budgetData},
		
			
//  			success: function (response) {
//  				RefreshTable(response);
//  				 alert ("Budget created successfully");
//  			},
// 			error: function (request, error) {
// 				console.log(arguments);
				 
//  			}
			
//  			  });
//  	}

	
// }	

function showInForm(id)
{
  //$("#edit").show();

  //$("#submit").hide();
  //window.location.href = "budgetform.php";
  
  
   // var id = $("#edit"+id).closest("tr")[0].children[0].innerText;
    var name = $("#edit"+id).closest("tr")[0].children[0].innerText;
    var amount = $("#edit"+id).closest("tr")[0].children[1].innerText;
   
  
      
         var url = "budgetFormEdit.php?id=" + encodeURIComponent(id) +
          "&name=" + encodeURIComponent(name)+
        "&amount=" + encodeURIComponent(amount);
       window.location.href = url;
}
  //      var queryString = new Array();
  //      if (queryString.length == 0) {
  //       if (window.location.search.split('?').length > 1) {
  //           var params = window.location.search.split('?')[1].split('&');
  //           for (var i = 0; i < params.length; i++) {
  //               var key = params[i].split('=')[0];
  //               var value = decodeURIComponent(params[i].split('=')[1]);
  //               queryString[key] = value;
  //           }
  //       }
  //   }
  //   if (queryString["name"] != null && queryString["technology"] != null) {
  //       var parseID =  queryString["id"] ;
  //       var parseName =   queryString["name"];
  //       var parseAmount =   queryString["amount"];
        
  //       $("#budgetId").val(parseID);
  //  $("#budgetname").val(parseName);
  //  $("#budgetamount").val(parseAmount);
  //   }


  //  $("#budgetId").val(id);
  //  $("#budgetname").val(name);
  //  $("#budgetamount").val("4647558");
   

	function deleteData(id)

	{
	
		

		$.ajax({
			url: 'BusinessLayer/budgetBL.php?function=deletefunc',
			type: 'post',
			 data:{deleteData:id},
			 dataType: 'JSON',
			//  cache: false,
			//  processData: false,
			//  contentType: false,
			
			success: function (response) {
				RefreshTable(response);
       // $.Toast(' Budget deleted successfully', {'duration': 1000, 'class': 'alert', 'position':'top','align':'center'});
        
			},
			error: function (request, error) {
				console.log(arguments);
				 //alert(" Can't do because: " + error);
			}
			
			  });
	}


	





	

    