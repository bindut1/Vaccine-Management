<?php
include_once("E_VacXin.php");

class Model_VacXin
{
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost:3306", "root", "binbkdn1") or die("Khong the ket noi CSDL");
        mysqli_select_db($this->link, "hospital");
    }

    public function getAllVacxin()
    {
        $sql = "SELECT * FROM vacxin";
        $res = mysqli_query($this->link, $sql);
        $vacxins = [];
        while ($row = mysqli_fetch_array($res)) {
            $vx = new Entity_VacXin($row['id'], $row['name_vaccine'], $row['injection_count'], $row['descrip'], $row['price'], $row['name_producer']);
            array_push($vacxins, $vx);
        }
        return $vacxins;
    }

    public function findVacxin($field, $infor)
    {
        $sql = "SELECT * FROM vacxin WHERE $field LIKE '%$infor%'";
        $res = mysqli_query($this->link, $sql);
        $vacxins = [];
        while ($row = mysqli_fetch_array($res)) {
            $vx = new Entity_VacXin($row['id'], $row['name_vaccine'], $row['injection_count'], $row['descrip'], $row['price'], $row['name_producer']);
            array_push($vacxins, $vx);
        }
        return $vacxins;
    }

    public function updateVacxin($vacxin)
    {
        $sql = "update vacxin set name_vaccine = '$vacxin->tenvx', injection_count = '$vacxin->somuitiem', descrip = '$vacxin->mota', price = '$vacxin->gia', name_producer = '$vacxin->nhasanxuat' where id = '$vacxin->idvx'";
        $this->link->query($sql);
    }

    public function getVacXinById($id)
    {
        $sql = "SELECT * FROM vacxin WHERE id='$id'";
        $res = mysqli_query($this->link, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $vacxin = new Entity_VacXin($row['id'], $row['name_vaccine'], $row['injection_count'], $row['descrip'], $row['price'], $row['name_producer']);
        }
        return $vacxin;
    }

    public function checkIDVX($id)
    {
        $sql = "SELECT * FROM vacxin WHERE id = '$id'";
        $result = mysqli_query($this->link, $sql);
        $tmp = "";
        if (mysqli_num_rows($result) > 0) {
            $tmp = "exist";
        } else {
            $tmp = "ok";
        }
        return $tmp;
    }

    public function addVacxin($vacxin)
    {
        $sql = "insert into vacxin values ('$vacxin->idvx', '$vacxin->tenvx', '$vacxin->somuitiem', '$vacxin->mota', '$vacxin->gia', '$vacxin->nhasanxuat')";
        $this->link->query($sql);
    }

    public function deleteVacxin($id)
    {
        $sql = "delete from vacxin where id = '$id'";
        $this->link->query($sql);
    }
}
