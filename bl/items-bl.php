<?php

include 'connection.php'; 

$operations = $_GET["function"];     
if ($operations == "readfunction")
{ 
  
  echo json_encode(readItemsTable());

    
    }


    else if($operations == "insertFunction")
    {
    

$itemsFormData = $_POST['itemsFormData'];
        
$decodedFormData = json_decode($itemsFormData, true);
$date = date("Y/m/d");
$itemName = $decodedFormData['name'];
$itemCode = $decodedFormData['code'];
$itemRate = $decodedFormData['rate'];   


 
 
$insertItemsQuery = "INSERT INTO items (code,name,rate,createdBy,createdOn,updatedBy,updatedOn)
VALUES ( $itemCode ,'$itemName',$itemRate,'joji','$date', 'joji','$date')";

 
 if ($conn->query($insertItemsQuery) === TRUE) {
  echo json_encode(readItemsTable());
 
  } else {
  echo "Error: " . $insertItemsQuery . "<br>" . $conn->error;
 }

    }

    else if($operations == "updateFunction")
    {


    
$itemsFormData = $_POST['itemEditFormData'];
        
$decodedFormData = json_decode($itemsFormData, true);
$date = date("Y/m/d");
$itemName = $decodedFormData['name'];
$itemCode = $decodedFormData['code'];
$itemRate = $decodedFormData['rate'];
$itemId = $decodedFormData['id'];



      
       
      $editItemsQuery = "UPDATE items SET name ='$itemName',code = $itemCode,rate=$itemRate, updatedOn = '$date' WHERE id=$itemId";
      
      
       
       if ($conn->query($editItemsQuery) === TRUE) {
        // echo "New record created successfully";
        echo json_encode(readItemsTable());
        } else {
        echo "Error: " . $editItemsQuery . "<br>" . $conn->error;
        }
        
 
       }     
       
      else if($operations == "deleteFunction")
      {

        $deleteItemId = $_POST['deleteitem'];


        $deleteItemQuery = "DELETE FROM items WHERE id= $deleteItemId ";
   
        if ($conn->query($deleteItemQuery ) === TRUE) {
          // echo "New record created successfully";
          echo json_encode(readItemsTable());
          } else {
          echo "Error: " . $deleteItemQuery  . "<br>" . $conn->error;
          }
        
        } 



    
  function readItemsTable()
  {
        global $conn;
    
       

      $itemsSelectQuery = "SELECT * FROM items";
      


  $itemsTableResult = $conn->query( $itemsSelectQuery );
   
  

      
      

            while($row = mysqli_fetch_array($itemsTableResult) ){
            
                $id = $row['id'];
                $code = $row['code'];
                $name = $row['name'];
                $rate = $row['rate'];
         
                $createdby = $row['createdBy'];
                $createdon = $row['createdOn'];
                $updatedby = $row['updatedBy'];
                $updatedon = $row['updatedOn'];
            
                $return_arr[] = array("id" => $id,
                                "code" => $code,
                                "name" => $name,
                                "rate" => $rate,
                                "createdby" => $createdby,
                                "createdon" => $createdon,
                                "updatedby" =>  $updatedby,
                                "updatedon" =>  $updatedon);

    
                            
                            
                            
                            
    
            }
          
               return $return_arr;
          }
        


$conn->close();
    ?>