<?php
include_once("../Model/M_KhachHang.php");


class Ctrl_KhachHang
{
    public function getAllGuest()
    {
        $model = new Model_KhachHang();
        $listKH = $model->getAllGuest();
        include_once('../View/XemKhachHang.php');
    }

    public function getLogById($id)
    {
        $model = new Model_KhachHang();
        $listLog = $model->getLogById($id);
        $name = $model->getNameGuestById($id);
        include_once('../View/XemLichSuTiem.php');
    }

    public function getStatistic()
    {
        $model = new Model_KhachHang();
        $listStatistic = $model->getStatistic();
        include_once('../View/XemThongKe.php');
    }
}

$controller = new Ctrl_KhachHang();
switch ($_REQUEST['act']) {
    case 'viewGuest':
        $controller->getAllGuest();
        break;
    case 'viewLog':
        $controller->getLogById($_REQUEST['id']);
        break;
    case 'statistic':
        $controller->getStatistic();
        break;
    default:
        break;
}
