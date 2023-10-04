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
};



?>