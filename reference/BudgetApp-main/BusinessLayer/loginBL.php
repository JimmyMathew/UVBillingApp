<?php
include 'connection.php'; 
session_start();
    
$operations = $_GET["function"]; 
if ($operations == "function")
{ 

    $loginData = $_POST['userData'];
        
    $decoded = json_decode( $loginData, true);
    $email = $decoded['emailid'];
    $password = $decoded['password'];
    $sql = "SELECT * FROM users where email = '$email'and password =  '$password' ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id'];
         
        $_SESSION['name'] = $row['Name'];
        $_SESSION['dob']= $row['d_o_b'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['sex'] = $row['sex'];
        $_SESSION['email']= $row['email'];
        $_SESSION['mobile'] = $row['mobile'];
        $_SESSION['module'] = $row['module'];
        $_SESSION['maritalstatus']= $row['marital_Status'];
        $_SESSION['password'] = $row['password'];
       
       // echo "Welcome ".$_SESSION['name']." you have successfully logged in.";
        
    }
    else {
        $emailsql = "SELECT * FROM users where email = '$email'";
        $emailResult = $conn->query($emailsql);
        if($emailResult->num_rows == 0){
            echo "emailfalse";
        }else{
            echo "passwordfalse";

        }




}
}
if (($operations == "logoutfunc"))
 {

    session_destroy();
    echo "You have successfully logged out.";
   
 //header ('Location:LogIn.php');
   


}
$conn->close();
    ?>
