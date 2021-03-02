<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername="localhost";
    $username="root";
    $password="";
    $database="employees";
    $u_name=$_POST["name"];
    $u_password=$_POST["password"];
    if(empty($u_name))
    {
        echo "Name can't be empty";
    }
    if(strlen($u_name)<5)
    {
        echo "Name should not be less than 5 characters";
    }
    if(empty($u_password))
    {
        echo "Password can't be empty";
    }
    if(strlen($u_password)<5)
    {
        echo "Password should not be less than 5 characters";
    }
    if(strlen($u_name)>=5 && strlen($u_password)>=5)
{
    $con=new mysqli($servername,$username,$password,$database);
    $stmt=$con->prepare("insert into empl values(?,?)");
    $stmt->bind_param("ss",$u_name,$u_password);
    $stmt->execute();
    echo "success";
}  
}
?>