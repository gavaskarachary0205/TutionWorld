<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname ="student";



$con =mysqli_connect($server, $username,$password,$dbname);

if(!$con)
{
    echo "not connected";
}   
else
{
    echo "connect";

}

$FullName = $_POST['FullName'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Location = $_POST['Location'];
    $Pincode = $_POST['Pincode'];
    $Password = $_POST['Pass']; 
     
    

    $sql = "INSERT INTO `sign_up`(`FullName`, `Email`, `Mobile`, `DateOfBirth`, `Location`, `Pincode`, `Password`) VALUES ('$FullName','$Email','$Mobile','$DateOfBirth','$Pincode','$Location','$Password')";
    
    $result = mysqli_query($con , $sql);


    if($result)
    {
        echo "data sumbmited";
    }
    else
    {
        echo "query faild...!";
    }
?>