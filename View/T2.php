<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Vaccine Management Navigation</title>
    <link rel="stylesheet" href="../Style/T2.css">
</head>

<body>
    <ul>
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <li><a href="../Controller/C_KhachHang.php?act=viewGuest" target="main">Xem thông tin khách hàng</a></li>
                <li><a href="../Controller/C_VacXin.php?act=viewVacxin" target="main">Xem thông tin vacxin</a></li>
                <li><a href="../Controller/C_VacXin.php?act=viewFind" target="main">Tìm kiếm thông tin vaccine</a></li>
                <li><a href="../Controller/C_KhachHang.php?act=statistic" target="main">Thống kê</a></li>
                <li><a href="../Controller/C_VacXin.php?act=viewUpdate" target="main">Cập nhật thông tin vaccine</a></li>
                <li><a href="../Controller/C_VacXin.php?act=viewAdd" target="main">Thêm vaccine</a></li>
                <li><a href="../Controller/C_VacXin.php?act=viewDelete" target="main">Xóa vaccine</a></li>
                <li><a href="../Controller/C_Register.php?act=viewUpdateAccount" target="main">Cập nhật thông tin tài khoản</a></li>
            <?php else: ?>
                <div>
                    Đây là trang người dùng. Nếu muốn truy cập trang quản trị, bạn phải có tài khoản quản trị!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</body>

</html>