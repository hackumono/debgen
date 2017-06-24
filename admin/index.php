<?php

require_once('../config/config.php');

$user = new User($db);

require_once('../tpl/header.admin.php');

if(isset($_POST['loginUser']))
{
    if($user->loginUser($_POST['username'], $_POST['pasword']) === false)
    {
        require_once('../tpl/error.login.php');
    }
}

if(isset($_SESSION['userid']) AND  $_SESSION['userid'] != '')
{
    if(isset($_GET['addRepo']))
    {
        require_once('addRepo.php');)  
    }
    elseif(isset($_GET['password']))
    {
        require_once('password.php');)   
    }
    elseif(isset($_GET['settings']))
    {
        require_once('settings.php');)    
    }
    else
    {
        require_once('start.php');
    }
}
else
{
    require_once('../tpl/login.php');
}

    require_once('../tpl/footer.admin.php');
