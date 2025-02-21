<?php
include_once("E_Register.php");

class Model_Register
{
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost:3306", "root", "binbkdn1") or die("Khong the ket noi CSDL");
        mysqli_select_db($this->link, "hospital");
    }

    public function addRegister($register)
    {
        $sql = "insert into account values ('$register->username', '$register->password', '$register->name', '$register->email', '$register->phone_number', '$register->address', '$register->role')";
        $this->link->query($sql);
    }

    public function isExistUsername($username)
    {
        $sql = "select username from account where username = '$username'";
        $result = mysqli_query($this->link, $sql);
        $tmp = "";
        if (mysqli_num_rows($result) > 0) {
            $tmp = "exist";
        } else {
            $tmp = "ok";
        }
        return $tmp;
    }

    public function updateAccount($account)
    {
        $sql = "update account set password = '$account->password', name = '$account->name', email = '$account->email', phone_number = '$account->phone_number', address = '$account->address', role = '$account->role' where username = '$account->username'";
        $this->link->query($sql);
    }

    public function getAllAccount()
    {
        $sql = "SELECT * FROM account";
        $res = mysqli_query($this->link, $sql);
        $accounts = [];
        while ($row = mysqli_fetch_array($res)) {
            $ac = new Entity_DangKy($row['username'], $row['password'], $row['name'], $row['email'], $row['phone_number'], $row['address'], $row['role']);
            array_push($accounts, $ac);
        }
        return $accounts;
    }

    public function getAccountByUsername($username)
    {
        $sql = "select * from account where username = '$username'";
        $res = mysqli_query($this->link, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $ac = new Entity_DangKy($row['username'], $row['password'], $row['name'], $row['email'], $row['phone_number'], $row['address'], $row['role']);
        }
        return $ac;
    }
}
