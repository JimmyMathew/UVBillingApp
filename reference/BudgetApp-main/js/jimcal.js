var digitArr = [];
var total = 0;
var newNum = 0;
var operator = "+";//operator initial value "+"


function display(clickedNumber) {
	
  digitArr.push(clickedNumber);//pushing the clicked numbers into the array called digitarray
  newNum= parseInt(digitArr.join(''));//removing comma from the array using join and converting it into an integer and we call it new num
  document.getElementById("txt").value = newNum;//displaying newnum
  
}


 function getOperator (op) {
	 digitArr = [];//emptying the array
	total = calculate(total,newNum,operator);
	 document.getElementById("txt").value = total;
	 operator = op;
	 
	 
	 
 }
 
 
 function calculate (num1 , num2 , oper) {
	 var opResult = 0 ;
	 
	 switch (oper) {
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
	 
	 return opResult;
	 
 }



