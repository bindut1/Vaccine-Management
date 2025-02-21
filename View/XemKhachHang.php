<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="../Style/XemKH.css">
</head>

<body>
    <div class="container">
        <h1>Danh sách khách hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Lịch sử tiêm</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listKH as $kh) {
                    echo "<tr>";
                    echo "<td>" . $kh->idkh . "</td>";
                    echo "<td>" . $kh->tenkh . "</td>";
                    echo "<td>" . $kh->sdt . "</td>";
                    echo "<td>" . $kh->diachi . "</td>";
                    echo "<td>" . $kh->ngaysinh . "</td>";
                    echo "<td>" . ($kh->gioitinh ? "Nam" : "Nu") . "</td>";
                    echo "<td><a href='../Controller/C_KhachHang.php?id=" . $kh->idkh . "&act=viewLog' class='a-link'>Xem</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>