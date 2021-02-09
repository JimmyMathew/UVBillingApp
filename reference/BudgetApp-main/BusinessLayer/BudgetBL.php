<?php
session_start();
include 'connection.php';

$operations = $_GET["function"];     
if ($operations == "readfunc")
{ 
  echo json_encode(ReadTransactions());
    
    }
    

        else if($operations == "insertFunc")
        {
         




    
            $FormDat = $_POST['budgetData'];
            
            $decoded = json_decode($FormDat, true);
            $date = date("Y/m/d");
            $dateNew = date("Y/m");
            $namedb = $decoded['name'];
            $amountdb = $decoded['amount'];
            $monthdb = $decoded['month'];
            $yeardb = $decoded['year'];
            $sql = "select * from budget where created_by = '".$_SESSION['id']."'and created_on like  '$dateNew%'
            ORDER BY id DESC;";
           $result = $conn->query($sql);
           if($result->num_rows == 1){

            echo "Only one budget for one month";

           }else{
                
            
            
             
            $insertsql = "INSERT INTO budget (Name,amount,available_amount,month,year,created_by,created_on,updated_by,updated_on)
            VALUES ('$namedb' ,$amountdb, $amountdb,'$monthdb',' $yeardb','".$_SESSION['id']."','$date','".$_SESSION['id']."','$date')";
            
            
             if ($conn->query($insertsql) === TRUE) {
               echo "New budget created successfully";
             // echo json_encode(ReadTransactions());
              } else {
                echo "Error: " . $insertsql . "<br>" . $conn->error;
              }
            }
            
        }
          

                  else if($operations == "updatefunc")
                  {
            
            
                    $updateDat = $_POST['updatedData'];
                    
                    $decodedUpdateData = json_decode($updateDat, true);
                    $date = date("Y/m/d");
                    $updateId = $decodedUpdateData['id'];
                    $updateName = $decodedUpdateData['name'];
                    $updateAmount = $decodedUpdateData['amount'];
                    
                    $date = date("Y/m");
                    $sql = "SELECT sum(amount) AS value_sum FROM transactions where created_by = '".$_SESSION['id']."'and created_on like  '$date%'
                    ORDER BY id DESC;";
                   
                   $result = $conn->query($sql);
                   $row = mysqli_fetch_array($result);
                   $sum_transactions = $row['value_sum'];
                   //array_push(  $amount_array,$amount);
                   $updateAvailableAmount =  $updateAmount -  $sum_transactions;
                   
                    
                   

                      if($sum_transactions >  $updateAmount){

                     echo json_encode(   $return =array( "Error:Your transaactions have exceeded your available budget amount."));
                      }
                      else{
                    
                    
                     
                    $updatesql = "UPDATE budget SET name ='$updateName',Amount = $updateAmount,available_amount = $updateAvailableAmount , updated_on = '$date' WHERE id=$updateId ";
                    
                    
                     
                     if ($conn->query($updatesql) === TRUE) {
                      // echo "New record created successfully";
                      echo json_encode(ReadTransactions());
                      } else {
                      echo "Error: " . $updatesql . "<br>" . $conn->error;
                      }
                    
                    }
            
                  }
                  else if($operations == "deletefunc")
                  {
            
                    $deleteDat = $_POST['deleteData'];
            
            
                    $deletesql = "DELETE FROM budget WHERE id=$deleteDat";
               
                    if ($conn->query($deletesql) === TRUE) {
                      // echo "New record created successfully";
                      echo json_encode(ReadTransactions());
                      } else {
                      echo "Error: " . $deletesql . "<br>" . $conn->error;
                      }
            
                  }
                  
            


                  function ReadTransactions()
    {
          global $conn;
          $date = date("Y/m");
          $return_arr = Array();
       $sql = "select * from budget where created_by = '".$_SESSION['id']."'and created_on like  '$date%'
        ORDER BY id DESC;";
       $result = $conn->query($sql);
            
              while($row = mysqli_fetch_array($result) ){
                  $id = $row['id'];
                  $name = $row['Name'];
                  $amount = $row['amount'];
                  $availableAmount= $row['available_amount'];
                  $month = $row['month'];
                  $year = $row['year'];

                  $createdby = $row['created_by'];
                  $createdon = $row['created_on'];
                  $updatedby = $row['updated_by'];
                  $updatedon = $row['updated_on'];
              
                  $return_arr[] = array("id" => $id,
                                  "name" => $name,
                                  "Amount" => $amount,
                                  "available_amount" => $availableAmount,
                                  "month" => $month,
                                  "year" => $year,
                                  "created_by" => $createdby,
                                  "created_on" => $createdon,
                                  "updated_by" =>  $updatedby,
                                  "updated_on" =>  $updatedon);
      
                              
                              
                              
                              
      
              }
                 return $return_arr;
        }
    










$conn->close();
    ?>
