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
    <title>Thêm vacxin</title>
    <link rel="stylesheet" href="../Style/CapNhatVX.css">
    <script>
        function checkMaVX() {
            const idvx = document.getElementById('id').value;
            const spanMessage = document.getElementById('check-id-message');
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;

            if (idvx.trim() === "") {
                spanMessage.textContent = "Vui lòng nhập mã vacxin!";
                spanMessage.style.color = "red";
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("GET", `../Controller/C_VacXin.php?act=checkIDVX&id=${encodeURIComponent(idvx)}`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if (xhr.responseText.trim() === "exist") {
                        spanMessage.textContent = "Mã vacxin đã tồn tại!";
                        spanMessage.style.color = "red";
                    } else if (xhr.responseText.trim() === "ok") {
                        spanMessage.textContent = "Mã vacxin hợp lệ.";
                        spanMessage.style.color = "green";
                        submitBtn.disabled = false;
                    }
                }
            };
            xhr.send();
        }
    </script>
</head>

<body>
    <div class="container">
        <h2>Thêm vacxin</h2>
        <form action="../Controller/C_VacXin.php" method="post">
            <div class="inp">
                <label for="id">Mã vacxin:</label>
                <input type="text" name="id" id="id" onkeyup="checkMaVX()" required>
                <span id="check-id-message"></span>
            </div>
            <div class="inp">
                <label for="name">Tên vacxin:</label>
                <input type="text" name="name_vaccine" id="name" required>
            </div>
            <div class="inp">
                <label for="tongsomui">Tổng số mũi:</label>
                <input type="text" name="injection_count" id="tongsomui" required>
            </div>
            <div class="inp">
                <label for="mota">Mô tả:</label>
                <input id="mota" name="descrip" type="text" required>
            </div>
            <div class="inp">
                <label for="gia">Giá:</label>
                <input id="gia" name="price" type="text" required>
            </div>
            <div class="inp">
                <label for="tennsx">Tên nhà sản xuất:</label>
                <input id="tennsx" name="name_producer" type="text" required>
            </div>
            <div class="inp">
                <button type="submit" id="submitBtn">OK</button>
                <button type="reset">Reset</button>
            </div>
            <input type="hidden" name="act" value="addVacxin">
        </form>
    </div>
</body>

</html>