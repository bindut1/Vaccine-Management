<?php
include_once("../Model/M_Register.php");


class Ctrl_Register
{
    public function addRegister($register)
    {
        $model = new Model_Register();
        $model->addRegister($register);
        header("Location: ../View/dangnhap.php");
    }

    public function isExistUsername($username)
    {
        $model = new Model_Register();
        $result = $model->isExistUsername($username);
        echo $result;
    }

    public function viewUpdateAccount()
    {
        $model = new Model_Register();
        $listAc = $model->getAllAccount();
        include_once('../View/CapNhatTaiKhoan.php');
    }

    public function viewUpdateAccountForm($username)
    {
        $model = new Model_Register();
        $account = $model->getAccountByUsername($username);
        include_once('../View/FormCapNhatTaiKhoan.php');
    }

    public function updateAccount($ac)
    {
        $model = new Model_Register();
        $model->updateAccount($ac);
        $listAc = $model->getAllAccount();
        include_once('../View/CapNhatTaiKhoan.php');
    }
}

$controller = new Ctrl_Register();
switch ($_REQUEST['act']) {
    case 'register':
        $register = new Entity_DangKy($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['fullname'], $_REQUEST['email'], $_REQUEST['phone'], $_REQUEST['address'], "admin");
        $controller->addRegister($register);
        break;
    case 'checkUsername':
        $controller->isExistUsername($_REQUEST['username']);
        break;
    case 'viewUpdateAccount':
        $controller->viewUpdateAccount();
        break;
    case 'viewUpdateAccountForm':
        $controller->viewUpdateAccountForm($_REQUEST['username']);
        break;
    case 'updateAccount':
        $ac = new Entity_DangKy($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['name'], $_REQUEST['email'], $_REQUEST['phone_number'], $_REQUEST['address'], $_REQUEST['role']);
        $controller->updateAccount($ac);
        break;
    default:
        break;
}
