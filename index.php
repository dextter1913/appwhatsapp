<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "On");

//Master
if (isset($_SESSION['Master'])) {
    require_once 'app/master/controller/controller.php';
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        switch ($_GET['controller']) {
            case $controller:
                controller::$controller();
                break;
        }
    } else {
        header('Location:Inicio');
    }



    //Admin
} elseif (isset($_SESSION['Admin'])) {
    require_once 'app/admin/controller/controller.php';
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        switch ($_GET['controller']) {
            case $controller:
                controller::$controller();
                break;
        }
    } else {
        header('Location:Inicio');
    }

    //Asistente
} elseif (isset($_SESSION['Asistant'])) {

    require_once 'app/asistant/controller/controller.php';
    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        switch ($_GET['controller']) {
            case $controller:
                controller::$controller();
                break;
        }
    } else {
        header('Location:Inicio');
    }

    //Login
} else {

    require_once 'app/Login/controller/controller.php';
    //exit();
    $controller = $_GET['controller'];
    switch ($_GET['controller']) {
        case $controller:
            //controller::$controller();
            if ($_GET['controller'] == 'Login') {
                controller::$controller();
            } else {
                header('Location:Login');
            }
            break;
    }
}







