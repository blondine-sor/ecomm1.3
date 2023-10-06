<?php
 function nameLengthIsValid($nameToValid){

    $length = strlen($nameToValid);
    $responses =[
        'isValid'=>true,
        'msg'=>''
 ];
 if($length<2){
    $responses=['isValid'=>false,
     'msg'=>'Non trop court'];
 }
 elseif($length>10){
    $responses=[
        'isValid'=>false,
        'msg'=>'Non trop long'
    ];

 }
 return $responses;
 };

 function addSalt($nameToSalt){
    $salt ='unPeuDeSel';
    $saltedName = $salt.$nameToSalt.$salt;
      
     return $saltedName;
 }
 function encodeName($saltedName){
    $encodedName = sha1($saltedName);
    return $encodedName;
 }