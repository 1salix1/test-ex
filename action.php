<?php
/**
 * Created by PhpStorm.
 * User: salix
 * Date: 24.11.2018
 * Time: 17:18
 */
session_start() ;
if (isset($_POST['one']) and (isset($_POST['two'])))
    {
        if ($_POST['one']!="" and $_POST['two']!="")
        {
            $result=$_POST['one']+$_POST['two'];
            header("/result.php?result=".$result);
            exit();
        }
        else
        {$_SESSION['error']="input value was empty";}
    }
header("/index.php");