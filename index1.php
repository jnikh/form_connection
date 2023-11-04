<?php

$server ="localhost";
$username ="root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
echo "Succesfully Connected";

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["Gender"];
$email = $_POST["email"];
$phone = $_POST["phone"];

 
// $sql=" UPDATE `registration`.`trip1` SET `name` = '$name',`age`='$age',`gender`='$gender',`email`='$email',`phone`='$phone' WHERE `trip1`.`srno` = 1";

    
if($age<40){
    $sql1= "INSERT INTO `registration`.`trip` (`srno`, `name`, `age`, `gender`, `email`, `phone`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', current_timestamp())"; 

    if($con->query($sql1) == true){
        echo "data updated";
    }else{
        echo "error:".$sql."<br>".$con->error;
    }
    
}
else{
    echo "<div?>you our not eligible</div?>";
}
// echo $sql;
// if($con->query($sql1) == true){
//     echo "data Inserted";
// }
// else{
//     echo "error:".$sql1.","
// }

$con->close();


?>
