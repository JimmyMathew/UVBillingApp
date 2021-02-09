


  function insertdata(){
	  var name = $("#registrationName").val();
	  var dob = $("#registrationDob").val();
	  var email = $("#registrationEmail").val();
	  var mobile = $("#registrationMobile").val();
	   var enterpass = $("#registrationPassword").val();
		var cnfrmpass = $("#cpassword").val();
		var age = $("#registrationAge").html();
		var sex =  $("input[name='sex']:checked").val();
		var maritalStatus = $("input[name='status']:checked").val();
		var emailFormat = $("#message").html()
		var mobileFormat = $("#Mobilemessage").html()
		 
    if (name == "" || name == null || name == undefined){
		$.Toast('Please enter the name', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#name").focus();
	}
	else if (dob == "" || dob == null || dob == undefined){
		$.Toast('Please enter the date of birth', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#dob").focus();
	}
		else if (email == "" || email == null || email == undefined){
			$.Toast('Please enter the email address', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#email").focus();
	}
	
	

	else if (mobile == "" || mobile == null || mobile == undefined){
		$.Toast('Please enter the mobile number', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#mobile").focus();
	}
	else if (enterpass == "" || enterpass == null || enterpass == undefined){
		$.Toast('Please enter the password', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#password").focus();
	}
	else if (cnfrmpass == "" || cnfrmpass == null || cnfrmpass == undefined){
		$.Toast('Please enter the password again', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
		  $("#cpassword").focus();
	}
	else if (!$("#op1").prop("checked")& !$("#op2").prop("checked") & !$("#op3").prop("checked") ){
	      
		$.Toast('Please select atleast one checkbox', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
    }
    else if (enterpass != cnfrmpass ){
	      
		$.Toast('Password does not match', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
	}
	else if (emailFormat == "INVALID EMAIL ADDRESS"){
	      
		$.Toast('Email ID is invalid', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
	  }
	  else if (mobileFormat == "INVALID MOBILE NUMBER"){
	      
		$.Toast('Mobile number is invalid', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
	  }
	
	
	else
	{
		var checkboxvalues = [];
		$(".form-check-input").each(function(){
			if ($(this).is(":checked")) {
				checkboxvalues.push($(this).val());
			}
		});

		checkboxvalues = checkboxvalues.toString();
		


		var myObj = {name:name, dob:dob , checkboxvalues:checkboxvalues ,email:email,mobile:mobile,age:age,enterpass:enterpass,sex:sex,maritalStatus:maritalStatus};
		var userData = JSON.stringify(myObj);
		 $.ajax({
			url: 'BusinessLayer/registrationBL.php?function=insertFunc',
			type: 'post',
			 data:{userData:userData},
			 
			//  cache: false,
			//  processData: false,
			//  contentType: false,
			 
			success: function (response) {
				//console.log(response);
				//RefreshTable(response);
				 if (response.localeCompare("fail ") == 0 ){
				
					$.Toast('This email id already exists', {'duration': 3000, 'class': 'alert', 'position':'top','align':'center'});
				 }else {
					$.Toast('You have signed up successfully', {'duration': 3000, 'class': 'success', 'position':'top','align':'center'});
				  window.location.replace("index.php");
				 }
			},
			error: function (request, error) {
				console.log(arguments);
				 //alert(" Can't do because: " + error);
			}
			
			  });
			}
			//window.location.replace("Login.php");
		}
		$(document).ready(function(){

		var date_input=$('input[id="registrationDob"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
			endDate: new Date(new Date().setDate(new Date().getDate() - 6570)),
			startDate: new Date(new Date().setDate(new Date().getDate() - 21900)),
		})

// 		$('#dob').change(function () {
//     console.log($('#dob').val());
// });


	});
  
    
	
	function AgeCalculator()
	{
	var userDate = $("#registrationDob").val();
	
     var d = new Date();
	 
	var dateToString = userDate.toString();
	var split = dateToString.split("-");
	var yearInt = parseInt(split[0]);
	var currentYear = d.getFullYear();
	var currentYearInt = parseInt(currentYear.toString());
	var age =  currentYearInt - yearInt ;
	 document.getElementById("registrationAge").innerHTML = age ;
	
	}
	function AgeCalculator1()
	{
		let currentDate = new Date();
		document.getElementById("registrationAge").innerHTML = (parseInt(currentDate.getFullYear().toString())) - (parseInt($("#dob").val().toString().split("/")[0]));
		
	}
	
	
	 // $("#dob").datepicker({
      // format: 'yyyy/mm/dd',
      // autoclose:true,
     
      // minDate: "-3d"
	  // });
	   
	
	function ValidateEmail()
{
var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
if($("#registrationEmail").val().match(mailformat))
{

	$("#message").text (" ").css("color", "green");
//alert("You have entered a valid email address!");    //The pop up alert for a valid email address
//document.form1.text1.focus();
//return true;
}
else
{
	$("#message").text ("INVALID EMAIL ADDRESS").css("color", "red");
//alert("You have entered an invalid email address!");    //The pop up alert for an invalid email address
//document.form1.text1.focus();
//return false;
}
}

function clearAll()

{

   $("#registrationName").val("");
   $("#registrationDob").val("");
  $("#registrationEmail").val("");
 $("#registrationMobile").val("");
$("#registrationPassword").val("");
 $("#cpassword").val("");
$('input[type=checkbox]').prop('checked', false);
$("#male").prop('checked', true);
$("#single").prop('checked', true);

		
		


}
function ValidatePhonenumber()
{
  var phoneno = /^\d{10}$/;
  if($("#registrationMobile").val().match(phoneno))
        {
			$("#Mobilemessage").text (" ").css("color", "green");
      return true;
        }
      else
        {
			$("#Mobilemessage").text ("INVALID MOBILE NUMBER").css("color", "red");
        return false;
        }
}
	
	 

		
		

		