<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        echo "fail connection!";
    }
    
    // CREATE TABLE `strip`.`strip` (`sno` , `name` , `class` , `age`, `gender`, `email`, `phone`, `des`) 
    $name = $_POST['name'];
    $class =$_POST['class'];
    $age =$_POST['age'];
    $gender =$_POST['gender'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $des =$_POST['des'];
    
    $sql = "INSERT INTO `strip`.`strip` ( `name` , `class` , `age`, `gender`, `email`, `phone`, `des`,`dt`) VALUES('$name','$class','$age','$gender','$email','$phone','$des',current_timestamp());";
    
    if($con->query($sql) === true){
        echo "Successfully values inserted";
    }
    
    else{
        echo "Error: $con <br> $con->error";
    }
}
$con->close();

?>