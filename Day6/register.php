<?php
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $Phone=$_POST["phonenumber"];
    

    echo "Your Name is: $name" ;
    
    echo "<br>Your email is: $email";
    echo "<br>Your password is: $password";
    echo "<br>Your address is: $address";
    echo "<br>Your Phone number is: $Phone";

?>