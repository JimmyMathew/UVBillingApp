<?php

include 'connection.php'; 

$operations = $_GET["function"];     
if ($operations == "readfunction")
{ 
  
  echo json_encode(ReadTransactions());

    
    }


    
  function ReadTransactions()
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