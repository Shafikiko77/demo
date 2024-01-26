<?php

session_start();
$_SESSION['name']='shafik';

//* $_GET
//* $_POST
//* $_REQUEST


//* GET DATA

$title= $_REQUEST["title"];
$details= $_REQUEST["details"];
$author= $_REQUEST["author"];

$errors=[];

//* DATA VALIDATION
//* TITLE VALIDATION
if(empty($title)){
    $errors['Title_error']="Where is title";
 }elseif(strlen($title) > 5){
    $errors['Title_error']="Hoise tw re bhai";
}

//* DETAILS VALIDATION
if(empty($details)){
    $errors['details_error']="Where is detail";
}

// ERROR < 0
if(count($errors)){
    $_SESSION['old']= $_REQUEST;
    $_SESSION['errors']= $errors;
    // REDIRACTION
    header("Location:../index.php" );
}
?>