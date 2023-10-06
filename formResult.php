<?php
require_once("functions.php");

if($_POST){
    $name=$_POST['fname'];
    if(empty($name)){
        echo"</br>Nom vide";
    }
    else{
        echo"</br>Mon nom est : " . $name;
    }
    $nameLengthIsValid = nameLengthIsValid($_POST['fname']);
    echo'</br>';
    var_dump($nameLengthIsValid);
    if(!$nameLengthIsValid['isValid']){

    }
};

echo'</br>';
$saltedName = addSalt($_POST['fname']);
var_dump($saltedName);

$encodedName = encodeName($saltedName);
echo'</br>';
var_dump($encodedName);




?>
<a href="./index.php">retour</a>