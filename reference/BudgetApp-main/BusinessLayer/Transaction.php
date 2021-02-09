<?php
session_start();
include 'connection.php'; 
$available_amount;
$budget_amount;
$operations = $_GET["function"];     
if ($operations == "readfunc")
{ 
  
  echo json_encode(ReadTransactions());

    
    }
    else if($operations == "insertFunc")
    {
    

$FormDat = $_POST['transactionData'];
        
$decoded = json_decode($FormDat, true);
$date = date("Y/m/d");
$namedb = $decoded['name'];
$amountdb = $decoded['amount'];
$categorydb = $decoded['category'];
$datedb = $decoded['date'];

 if(budgetlimit($amountdb) == "fail"){
 echo json_encode("fail");
 }
 else{

 
$insertsql = "INSERT INTO transactions (name,Amount,category,Date,created_by,created_on,updated_by,updated_on)
VALUES ( '$namedb' ,$amountdb,'$categorydb','$datedb','".$_SESSION['id']."','$date', '".$_SESSION['id']."','$date')";

 
 if ($conn->query($insertsql) === TRUE) {
  // echo "New record created successfully";
  //echo json_encode(ReadTransactions());
  } else {
  echo "Error: " . $insertsql . "<br>" . $conn->error;
 }

 
        
          updateAvailableamount();

}
      }

      else if($operations == "deletefunc")
      {

        $deleteDat = $_POST['deleteData'];


        $deletesql = "DELETE FROM transactions WHERE id=$deleteDat";
   
        if ($conn->query($deletesql) === TRUE) {
          // echo "New record created successfully";
          //echo json_encode(ReadTransactions());
          } else {
          echo "Error: " . $deletesql . "<br>" . $conn->error;
          }
          updateAvailableamount();  
        }
        else if($operations == "updatefunc")
             {
       
       
               $updateDat = $_POST['updatedData'];
               
               $decodedUpdateData = json_decode($updateDat, true);
               $date = date("Y/m/d");
               $updateId = $decodedUpdateData['id'];
               $updateName = $decodedUpdateData['name'];
               $updateAmount = $decodedUpdateData['amount'];
               $updateCategory = $decodedUpdateData['category'];
               $updatedate = $decodedUpdateData['date'];

               if(budgetlimit($updateAmount) == "fail"){
                echo json_encode("fail");
                }
                else{
               
               
                
               $updatesql = "UPDATE transactions SET name ='$updateName',Amount = $updateAmount,category='$updateCategory',Date ='$updatedate', updated_on = '$date' WHERE id=$updateId ";
               
               
                
                if ($conn->query($updatesql) === TRUE) {
                 // echo "New record created successfully";
                 //echo json_encode(ReadTransactions());
                 } else {
                 echo "Error: " . $updatesql . "<br>" . $conn->error;
                 }
                 
          updateAvailableamount();  
                }      
        }

 
  function ReadTransactions()
  {
        global $conn;
        //$return_arr = Array();
        $date = date("Y/m");
        $return_arr[]=array("id" => 0,
                                "name" => '',
                                "Amount" => '',
                                "category" => '',
                               "Date" => '',
                                "created_by" => '',
                                "created_on" => '',
                                "budgetAmount"=>  '',
                            "budgetAvailableAmount" => '',
                                "updated_by" =>  '',
                                "updated_on" =>  '');


        $sql3= "SELECT * FROM budget where created_by = '".$_SESSION['id']."' and created_on like  '$date%'
               ORDER BY id DESC;";
        $budget_sql = $conn->query($sql3);
        
                if( $row1 = mysqli_fetch_array($budget_sql)){
        
             $budgetAmount =   $row1['amount'];
             $budgetAvailableAmount=$row1['available_amount'];
                  
                  }

      $sql = "SELECT * FROM transactions where created_by = '".$_SESSION['id']."'and created_on like  '$date%'
      ORDER BY id DESC;";


  $result = $conn->query($sql);
   
  // if ($conn->query( $sql) === TRUE) {
  //   // echo "New record created successfully";
  //   //echo json_encode(ReadTransactions());
  //   } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  //   }

    
//      if($result->num_rows == 0){

//  $return = array($budgetAmount,$budgetAvailableAmount );
// return $return;


      
      

            while($row = mysqli_fetch_array($result) ){
            
                $id = $row['id'];
                $name = $row['Name'];
                $amount = $row['amount'];
                $category = $row['category'];
                $Date_s = $row['Date'];
                $createdby = $row['created_by'];
                $createdon = $row['created_on'];
                $updatedby = $row['updated_by'];
                $updatedon = $row['updated_on'];
            
                $return_arr[] = array("id" => $id,
                                "name" => $name,
                                "Amount" => $amount,
                                "category" => $category,
                               "Date" => $Date_s,
                                "created_by" => $createdby,
                                "created_on" => $createdon,
                                "budgetAmount"=>  $budgetAmount,
                            "budgetAvailableAmount" => $budgetAvailableAmount,
                                "updated_by" =>  $updatedby,
                                "updated_on" =>  $updatedon);

    
                            
                            
                            
                            
    
            }
          
               return $return_arr;
          }
      

      function updateAvailableamount()
{
  global $conn;
 $amount_array = Array();
 $date = date("Y/m");
 $sql = "SELECT sum(amount) AS value_sum FROM transactions where created_by = '".$_SESSION['id']."'and created_on like  '$date%'
 ORDER BY id DESC;";

$result = $conn->query($sql);
if($row = mysqli_fetch_array($result) ){
$sum_transactions = $row['value_sum'];
//array_push(  $amount_array,$amount);


 }
//$sum_of_transactions = array_sum($amount_array);

  $sql2 = "SELECT * FROM budget where created_by = '".$_SESSION['id']."' and created_on like  '$date%'
  ORDER BY id DESC;";
$budget_amountsql = $conn->query($sql2);

if( $row = mysqli_fetch_array($budget_amountsql)){

$budget_amount = $row['amount'];
}

$available_amount = $budget_amount - $sum_transactions ;

$update_availableamount_sql = "UPDATE budget SET available_amount =$available_amount";
if ($conn->query($update_availableamount_sql) === TRUE) {
//echo "New record created successfully";
echo json_encode(ReadTransactions());
} else {
echo "Error: " . $update_availableamount_sql . "<br>" . $conn->error;
}
  
}

function budgetlimit($amountdb)
{
  global $conn;
  $date = date("Y/m");
  $sql = "SELECT sum(amount) AS value_sum FROM transactions where created_by = '".$_SESSION['id']."'and created_on like  '$date%'
  ORDER BY id DESC;";
 
 $result = $conn->query($sql);
 if($row = mysqli_fetch_array($result) ){
 $sum_transactions = $row['value_sum']+$amountdb;
 //array_push(  $amount_array,$amount);
 
 
  }
 //$sum_of_transactions = array_sum($amount_array);
 
   $sql2 = "SELECT * FROM budget where created_by = '".$_SESSION['id']."' and created_on like  '$date%'
   ORDER BY id DESC;";
 $budget_amountsql = $conn->query($sql2);
 
 if( $row = mysqli_fetch_array($budget_amountsql)){
 
 $budget_amount = $row['amount'];
 //$available_amount = $row['available_amount']+$amountdb;


 }

 if( $sum_transactions >  $budget_amount){

return  "fail";
 }
 

}


   
  
$conn->close();
    ?>
    