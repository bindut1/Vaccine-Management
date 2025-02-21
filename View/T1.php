<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <link rel="stylesheet" href="../Style/T1.css">
</head>

<body>
    <div class="header-container">
        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
            <span class="welcome-message">Welcome, <?= htmlspecialchars($_SESSION['name']) ?>! </span>
            <a href="dangxuat.php" target="_top" class="auth-link">Đăng xuất</a>
        <?php else: ?>
            <a href="dangnhap.php" target="_top" class="auth-link">Đăng nhập</a>
        <?php endif; ?>
    </div>
</body>

</html>