<?php
include_once("../Model/M_Login.php");


class Ctrl_Login
{
    public function checkUser($username, $password)
    {
        $model = new Model_Login();
        $result = $model->checkUser($username, $password);
        if ($result) {
            header("Location: ../View/home.php");
            exit();
        } else {
            header("Location: ../View/dangnhap.php?tryAgain=1");
            exit();
        }
    }
}

$controller = new Ctrl_Login();
switch ($_REQUEST['act']) {
    case 'checkLogin':
        $controller->checkUser($_REQUEST['username'], $_REQUEST['password']);
        break;
    default:
        break;
}
