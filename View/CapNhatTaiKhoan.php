<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../View/dangnhap.php");
    exit();
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link rel="stylesheet" href="../Style/XemKH.css">
</head>

<body>
    <div class="container">
        <h1>Cập nhật tài khoản</h1>
        <table id="table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Role</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listAc as $ac) {
                    echo "<tr>";
                    echo "<td>" . $ac->username . "</td>";
                    echo "<td>" . $ac->password . "</td>";
                    echo "<td>" . $ac->name . "</td>";
                    echo "<td>" . $ac->email . "</td>";
                    echo "<td>" . $ac->phone_number . "</td>";
                    echo "<td>" . $ac->address . "</td>";
                    echo "<td>" . $ac->role . "</td>";
                    echo "<td><a href='../Controller/C_Register.php?username=" . $ac->username . "&act=viewUpdateAccountForm' class='a-link'>Cập nhật</a></td>";
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>