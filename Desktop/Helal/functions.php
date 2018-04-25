<?php 
function validate_email($email){
    $parttern= "/.+@.+\..+/";
    return preg_match($parttern,$email);
}
function is_email_exists($email){
    $user= User::where('email', $email)->first();
    return $user ? true : false;
}
function validate_string($string,$limit= 3){
    return strlen($string) > $limit;
}
function redirect($path){
    header("Location:$path");
}
function logout(){
   session_destroy();
   redirect('/'); 
}