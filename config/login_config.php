<?php

    session_start();

    require_once('functions.php');


if(isset($_POST['btnsign'])){
    // include('../classes/class_loginConfig.php');
    require_once("../private/classes/class_loginConfig.php");
    
    $info = new loginConfig();
    // $infos = new loginConfig();
    $info->setusername($_POST['username']);
    $info->setpassword($_POST['password']);
    // $infos->setusername($_POST['username']);
    // $infos->setpassword($_POST['password']);
    // $info->setrole($_POST['role'] = 'admin');
    // $infos->setrole($_POST['role'] = 'user');

    $login = $info->login();
    // $logins = $infos->login();


    if($login){
        header("Location:../dashboard/bubble-roll.php");
        // flash("msg1","  Success!");
        // echo "<script>alert('Error');document.location='../dashboard/res.php'</script>";
 

    // }elseif($logins){

        // echo "<div id='show-alert'>ocument.location='../index.php';</script></div>"; 
        // header("Location:../dashboard/butane.php");
        // flash("msg1","Check UserName & Password Correctly Does Not Exists!");
    
        // echo "<div id='show-alert'><script>document.location='../index.php';</script></script></div>"; 


    }
    else{

        // echo "<div id='show-alert'>ocument.location='../index.php';</script></div>"; 
        header("Location:../index.php");
        flash("msg1","Check UserName & Password Correctly Does Not Exists!");
    
        // echo "<div id='show-alert'><script>document.location='../index.php';</script></script></div>"; 


    }
}
   



?>