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
    <title>Cập nhật thông tin vacxin</title>
    <link rel="stylesheet" href="../Style/CapNhatVX.css">
</head>

<body>
    <div class="container">
        <h1>Cập nhật thông tin vacxin</h1>
        <form action="../Controller/C_VacXin.php" method="GET">
            <div class="inp">
                <label for="id">Mã vacxin:</label>
                <input id="id" name="id" type="text" readonly value="<?= $vacxin->idvx ?>">
            </div>
            <div class="inp">
                <label for="name">Tên vacxin:</label>
                <input id="name" name="name_vaccine" type="text" value="<?= $vacxin->tenvx ?>">
            </div>
            <div class="inp">
                <label for="tongsomui">Tổng số mũi:</label>
                <input id="tongsomui" name="injection_count" type="text" value="<?= $vacxin->somuitiem ?>">
            </div>
            <div class="inp">
                <label for="mota">Mô tả:</label>
                <input id="mota" name="descrip" type="text" value="<?= $vacxin->mota ?>">
            </div>
            <div class="inp">
                <label for="gia">Giá:</label>
                <input id="gia" name="price" type="text" value="<?= $vacxin->gia ?>">
            </div>
            <div class="inp">
                <label for="tennsx">Tên nhà sản xuất:</label>
                <input id="tennsx" name="name_producer" type="text" value="<?= $vacxin->nhasanxuat ?>">
            </div>
            <div class="form-actions">
                <button type="submit">OK</button>
                <button type="reset">Reset</button>
            </div>
            <input type="hidden" name="act" value="updateVacxin">
        </form>
    </div>
</body>

</html>