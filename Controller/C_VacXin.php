<?php
include_once("../Model/M_VacXin.php");

class Ctrl_VacXin
{
    public function getAllVacxin()
    {
        $model = new Model_VacXin();
        $listVX = $model->getAllVacxin();
        include_once('../View/XemVacXin.php');
    }

    public function viewFindVacxin()
    {
        include_once('../View/TimKiemVacXin.php');
    }

    public function findVacxin($field, $infor)
    {
        $model = new Model_VacXin();
        $listVX = $model->findVacxin($field, $infor);
        include_once('../View/TimKiemVacXin.php');
    }

    public function viewUpdateVacxin()
    {
        $model = new Model_VacXin();
        $listVX = $model->getAllVacxin();
        include_once('../View/CapNhatVacXin.php');
    }

    public function viewUpdateFormVacxin($id)
    {
        $model = new Model_VacXin();
        $vacxin = $model->getVacXinById($id);
        include_once('../View/FormCapNhatVacXin.php');
    }

    public function updateVacxin($vacxin)
    {
        $model = new Model_VacXin();
        $model->updateVacxin($vacxin);
        $listVX = $model->getAllVacxin();
        include_once('../View/CapNhatVacXin.php');
    }

    public function viewAddVacxin()
    {
        include_once('../View/ThemVacXin.php');
    }

    public function checkIDVX($id)
    {
        $model = new Model_VacXin();
        $result = $model->checkIDVX($id);
        echo $result;
    }

    public function addVacxin($vacxin)
    {
        $model = new Model_VacXin();
        $model->addVacxin($vacxin);
        $listVX = $model->getAllVacxin();
        include_once('../View/XemVacXin.php');
    }

    public function viewDelete()
    {
        $model = new Model_VacXin();
        $listVX = $model->getAllVacxin();
        include_once('../View/XoaVacXin.php');
    }

    public function deleteVacxin($id)
    {
        $model = new Model_VacXin();
        $model->deleteVacxin($id);
        $listVX = $model->getAllVacxin();
        include_once('../View/XoaVacXin.php');
    }
}

$controller = new Ctrl_VacXin();
switch ($_REQUEST['act']) {
    case 'viewVacxin':
        $controller->getAllVacxin();
        break;
    case 'viewFind':
        $controller->viewFindVacxin();
        break;
    case 'findVacxin':
        $controller->findVacxin($_REQUEST['field'], $_REQUEST['infor']);
        break;
    case 'viewUpdate':
        $controller->viewUpdateVacxin();
        break;
    case 'viewUpdateForm':
        $controller->viewUpdateFormVacxin($_REQUEST['id']);
        break;
    case 'updateVacxin':
        $vacxin = new Entity_VacXin($_REQUEST['id'], $_REQUEST['name_vaccine'], $_REQUEST['injection_count'], $_REQUEST['descrip'], $_REQUEST['price'], $_REQUEST['name_producer']);
        $controller->updateVacxin($vacxin);
        break;
    case 'viewAdd':
        $controller->viewAddVacxin();
        break;
    case 'checkIDVX':
        $controller->checkIDVX($_REQUEST['id']);
        break;
    case 'addVacxin':
        $vacxin = new Entity_VacXin($_REQUEST['id'], $_REQUEST['name_vaccine'], $_REQUEST['injection_count'], $_REQUEST['descrip'], $_REQUEST['price'], $_REQUEST['name_producer']);
        $controller->addVacxin($vacxin);
        break;
    case 'viewDelete':
        $controller->viewDelete();
        break;
    case 'deleteVacxin':
        $controller->deleteVacxin($_REQUEST['id']);
        break;
    default:
        break;
}
