<?php

require_once("functions.php");

session_start();

if(isset($_POST['btnreg'])){
    // include("location: ../classes/class_registerConfig.php");
    require_once("../private/classes/class_registerConfig.php");
   
    $sc = new registerConfig();
    $sc->setemail($_POST['email']);
    $sc->setusername($_POST['username']);
    $sc->setpassword($_POST['password']);
    $sc->setrole($_POST['role'] = 'user');
    $sc->setimage($_POST['image'] = 'boy.png');
    // $sc->insertData();
    // echo "<script> alert('data saved successfully');document.location='../../resources/views/register.php'</script >";
    if($sc->checkUser($_POST['email']))
    {
       echo "<script> alert('data saved successfully');";
       flash("msg2"," Already Exists Email!");
   
       header("Location:../regx.php");
    //    $sc->insertData();
       
    }
    else{
        flash("msg1","Register Successfully Created!");

        header("Location:../regx.php");
        $sc->insertData();
       
    }
    }


?>