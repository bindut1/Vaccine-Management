<?php
session_start();

class Model_Login
{
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect("localhost:3306", "root", "binbkdn1") or die("Khong the ket noi CSDL");
        mysqli_select_db($this->link, "hospital");
    }

    public function checkUser($username, $password)
    {
        $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
        $res = mysqli_query($this->link, $sql);
        if ($row = mysqli_fetch_array($res)) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $name = $row['name'];
            $_SESSION['name'] = $name;
            $role = $row['role'];
            $_SESSION['role'] = $role;
            return true;
        } else
            return false;
    }
}
