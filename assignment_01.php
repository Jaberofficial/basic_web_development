<?php

$user =[
    "jaber"=> "pass12345",
    "hossain"=> "psw890345",
    
];

$inputUsername = "jaber";
$inputPassword = "pass12345";
// $inputUsername = "hossain";
// $inputPassword = "pass12345";

if(array_key_exists($inputUsername, $user)){
if($user[$inputUsername]=== $inputPassword){

    echo "Login successful! Welcome, $inputUsername.";
}else{
    echo"Invalid Username or Password, please try again.";
}

}

?>