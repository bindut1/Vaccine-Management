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
    <title>Cập nhật thông tin tài khoản</title>
    <link rel="stylesheet" href="../Style/CapNhatVX.css">
</head>

<body>
    <div class="container">
        <h1>Cập nhật thông tin tài khoản</h1>
        <form action="../Controller/C_Register.php" method="GET">
            <div class="inp">
                <label for="id">Username:</label>
                <input id="id" name="username" type="text" readonly value="<?= $account->username ?>">
            </div>
            <div class="inp">
                <label for="name">Password:</label>
                <input id="name" name="password" type="text" value="<?= $account->password ?>">
            </div>
            <div class="inp">
                <label for="tongsomui">Full Name:</label>
                <input id="tongsomui" name="name" type="text" value="<?= $account->name ?>">
            </div>
            <div class="inp">
                <label for="mota">Email:</label>
                <input id="mota" name="email" type="text" value="<?= $account->email ?>">
            </div>
            <div class="inp">
                <label for="gia">Phone Number:</label>
                <input id="gia" name="phone_number" type="text" value="<?= $account->phone_number ?>">
            </div>
            <div class="inp">
                <label for="tennsx">Address:</label>
                <input id="tennsx" name="address" type="text" value="<?= $account->address ?>">
            </div>
            <div class="inp">
                <label for="tennsx">Role:</label>
                <input id="tennsx" name="role" type="text" value="<?= $account->role ?>">
            </div>
            <div class="form-actions">
                <button type="submit">OK</button>
                <button type="reset">Reset</button>
            </div>
            <input type="hidden" name="act" value="updateAccount">
        </form>
    </div>
</body>

</html>