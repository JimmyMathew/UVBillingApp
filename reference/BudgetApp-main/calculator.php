<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel = "stylesheet" href = "css/styles.css">
<script src="js/jimcal.js"></script>
 
<title>CALCULATOR</title>





</head>

<body>
   
<div class = "container box">
    <div class="row ">
    
    <div classs = "col-sm ">
<form name = "form">
    <input id = "txt" class = "textview" readonly >
	



</div>

    </div>

<div class="row  ">
    <div classs = "col-sm ">
<table>
<tr>
<td><input onclick = "display()" class = "button" type="button" value="c"></td>
<td><input onclick = "display()" class = "button"type="button" value="<<"></td>
<td><input onclick = "display()" class = "button"type="button" value="%"></td>
<td><input onclick = "display('/')" class = "button"type="button" value="/"></td>

</tr>

<tr>
    <td><input onclick = "display('7')" class = "button"type="button" value="7"></td>
    <td><input onclick = "display('8')" class = "button"type="button" value="8"></td>
    <td><input onclick = "display('9')" class = "button"type="button" value="9"></td>
    <td><input onclick = "display('*')" class = "button"type="button" value="*"></td>
    
    </tr>

    <tr>
        <td><input onclick = "display('4')" class = "button" type="button" value="4"></td>
        <td><input onclick = "display('5')" class = "button"type="button" value="5"></td>
        <td><input onclick = "display('6')" class = "button"type="button" value="6"></td>
        <td><input onclick = "display('-')" class = "button"type="button" value="-"></td>
        
        </tr>


        <tr>
            <td><input onclick = "display('1')" class = "button"type="button" value="1"></td>
            <td><input onclick = "display('2')" class = "button"type="button" value="2"></td>
            <td><input onclick = "display('3')" class = "button"type="button" value="3"></td>
            <td><input onclick = "getOperator('+')" class = "button"type="button" value="+"></td>
            
            </tr>

            <tr>
                <td><input onclick = "display()" class = "button"type="button" value=">"></td>
                <td><input onclick = "display('0')" class = "button"type="button" value="0"></td>
                <td><input onclick = "display(.)" class = "button"type="button" value="."></td>
                <td><input onclick = "calculate()" class = "button"type="button" value="="></td>
                
                </tr>

</table>
</form>
</div>

</div>
</div>








</div>
<p id = "oo" > +</p>


<footer class="page-footer font-small blue pt-4 footers foottop">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-sm-6 mt-sm-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase">BUDGET</h5>
          
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-sm-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-sm-3 mb-sm-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->



</body>
</html>