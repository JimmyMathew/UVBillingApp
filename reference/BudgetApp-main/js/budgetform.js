
$(document).ready(function(){
 
	var date = new Date();

	switch (date.getMonth()) {
  case 0:
   $("#month").val("January"); ;
    break;
  case 1:
     $("#month").val("February");
    break;
  case 2:
     $("#month").val("March");
    break;
  case 3:
   $("#month").val("April");
    break;
  case 4:
    $("#month").val("May");
    break;
  case 5:
    $("#month").val("June");
    break;
  case 6:
   $("#month").val("July");
    break;
    case 7:
  $("#month").val("August");
    break;
    case 8:
   $("#month").val("September");
    break;
    case 9:
   $("#month").val("October");
    break;
    case 10:
   $("#month").val("November");
    break;
    case 11:
    $("#month").val("December");
}

	 $("#year").val(date.getFullYear());

   var queryString = new Array(); 
   if (queryString.length == 0) {
    if (window.location.search.split('?').length > 1) {
        var params = window.location.search.split('?')[1].split('&');
        for (var i = 0; i < params.length; i++) {
            var key = params[i].split('=')[0];
            var value = decodeURIComponent(params[i].split('=')[1]);
            queryString[key] = value;
        }
    }
}
if (queryString["id"] != null && queryString["name"] != null&&queryString["amount"] != null) {
    var parseID =  queryString["id"] ;
    var parseName =   queryString["name"];
    var parseAmount =   queryString["amount"];
    
    $("#budgetId").val(parseID);
$("#budgetname").val(parseName);
$("#budgetamount").val(parseAmount);
}

  });

  
	function Edit()
	{
		
		$("#budgetId").val();
		  $("#budgetname").val();
		  $("#budgetamount").val();
		  
		  

		  
	var myObj = {id:$("#budgetId").val() ,name: $("#budgetname").val(), amount: $("#budgetamount").val()};
	var updatedData = JSON.stringify(myObj);
	$.ajax({
		url: 'BusinessLayer/budgetBL.php?function=updatefunc',
    type: 'post',
		 data:{updatedData:updatedData},
		 //dataType: 'JSON',
        //  cache: false,
        //  processData: false,
        //  contentType: false,
        
        success: function (response) {
          $.Toast(response[0], {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
			RefreshTable(response);
			
		},
		error: function (request, error) {
			console.log(arguments);
 			//alert(" Can't do because: " + error);
		}
		
		  });
		 
     // window.location.href = "budget.php";
	}
 
  
  
  function insertData()
  {
  	 var name = $("#budgetname").val();
    var amount = $("#budgetamount").val();
    var month = $("#month").val();
    var year = $("#year").val();

   if (name == "" || name == null || name == undefined)
     {
      $.Toast('Please enter your name', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
	
 		  $("#budgetname").focus();
	}
	else if (amount == "" || amount == null || amount == undefined)
	{
    $.Toast('Please enter the amount', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
 		  $("#amount").focus();
 	}
   else 
    {
		var myObj = {name:name, amount:amount,month:month,year:year};
		var budgetData = JSON.stringify(myObj);
 		 $.ajax({
 			url: 'BusinessLayer/BudgetBL.php?function=insertFunc',
 			type: 'post',
			 data:{budgetData:budgetData},
		
			
 			success: function (response) {
 			//	RefreshTable(response);
       $.Toast(response, {'duration': 3000, 'class': 'info', 'position':'top','align':'center'});
          window.location.replace("budget.php");
          
 			},
			error: function (request, error) {
				console.log(arguments);
				 
 			}
			
 			  });
 	}

	
}	





// function emptyValidation()
//   {
//   	 var name = $("#budgetname").val();
// 	  var amount = $("#amount").val();

//   if (name == "" || name == null || name == undefined)
//     {
// 		 alert( "Name field is empty");
// 		  $("#budgetname").focus();
// 	}
// 	else if (amount == "" || amount == null || amount == undefined)
// 	{
// 		 alert( "Amount field is empty");
// 		  $("#amount").focus();
// 	}
//   else 
//     {
// 		 alert( "success");
// 	}





// 	}
