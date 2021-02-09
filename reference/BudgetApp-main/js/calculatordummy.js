var digitArr = [];
var opResult = 0;
var joinedNumber = [];

var num1 = 0;
var num2 = 0;
var operator = "";


function display(clickedNumber) {
	
 
 
 
if(clickedNumber == "+" ||  clickedNumber == "-" || clickedNumber == "*" || clickedNumber == "/")
{
	operator = clickedNumber;
	document.getElementById("txt").value = clickedNumber ;
	num1 = parseInt(joinedNum);
}
  digitArr.push(clickedNumber);
  joinedNum = digitArr.join('').toString();
  document.getElementById("txt").value = joinedNum ;
  
  //digitArr = [];
}
 
 function calculate (){
     num2 = parseInt(joinedNum.split(operator)[1]);
	 // var arr = joinedNum.split(operator);
	 // var a  = arr[1];
	 // var b = parsInt(a);
	  
	 switch (operator) {
  case "+":
    opResult = num1 + num2;
    break;
  case "-":
    opResult = num1 - num2;
    break;
  case "/":
     opResult = num1 / num2;
    break;
  case "*":
    opResult = num1 * num2;
    
}
 document.getElementById("txt").value = opResult ;

	 
 }

