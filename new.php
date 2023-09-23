<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email= $_POST["email"];
    $password= $_POST["password"];

    if($email == 'bijoy@gmail.com' && $password == "123"){
        echo "Login Successful";
    }else{
        echo "Invalid Creds";
    }
    echo "<br>";
    echo $email ;
    echo "<br>";
    echo $password;
}

?>