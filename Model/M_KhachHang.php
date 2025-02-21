<?php
include_once("E_KhachHang.php");
include_once("E_LichSuTiemPhong.php");
include_once("E_ThongKe.php");
class Model_KhachHang
{
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost:3306", "root", "binbkdn1") or die("Khong the ket noi CSDL");
        mysqli_select_db($this->link, "hospital");
    }

    public function getAllGuest()
    {
        $sql = "SELECT * FROM khachhang";
        $res = mysqli_query($this->link, $sql);
        $guests = [];
        while ($row = mysqli_fetch_array($res)) {
            $guest = new Entity_KhachHang($row['id'], $row['name'], $row['phone_number'], $row['address'], $row['date'], $row['sex']);
            array_push($guests, $guest);
        }
        return $guests;
    }

    public function getLogById($id)
    {
        $sql = "SELECT B.name as sick_name, V.name_vaccine, V.injection_count, LSTP.injection_index, LSTP.injection_date, LSTP.injection_next_date
				FROM lichsutiemphong LSTP 
                LEFT JOIN vacxin V ON LSTP.id_vaccine = V.id
				LEFT JOIN phongbenh PB ON V.id = PB.id_vaccine 
                LEFT JOIN benh B ON PB.id_sick = B.id
				WHERE LSTP.id_guest = '$id'";
        $res = mysqli_query($this->link, $sql);
        $listLog = [];
        while ($row = mysqli_fetch_array($res)) {
            $log = new Entity_LichSuTiemPhong($row['sick_name'], $row['name_vaccine'], $row['injection_count'], $row['injection_index'], $row['injection_date'], $row['injection_next_date']);
            array_push($listLog, $log);
        }
        return $listLog;
    }

    public function getNameGuestById($id)
    {
        $sql = "select name from khachhang where id = '$id'";
        $res = mysqli_query($this->link, $sql);
        if ($row = mysqli_fetch_array($res)) {
            $name = $row['name'];
        }
        return $name;
    }

    public function getStatistic()
    {
        $sql = "SELECT KH.id as MaKhachHang, KH.name AS TenKhachHang, KH.address as DiaChi, SUM(V.price) AS TongTien
				FROM lichsutiemphong LSTP 
                JOIN khachhang KH ON LSTP.id_guest = KH.id
				JOIN vacxin V ON LSTP.id_vaccine = V.id 
                GROUP BY KH.name, KH.id, KH.address
				ORDER BY TongTien ASC";
        $res = mysqli_query($this->link, $sql);
        $listStatistic = [];
        while ($row = mysqli_fetch_array($res)) {
            $statistic = new Entity_ThongKe($row['MaKhachHang'], $row['TenKhachHang'], $row['DiaChi'], $row['TongTien']);
            array_push($listStatistic, $statistic);
        }
        return $listStatistic;
    }
}
