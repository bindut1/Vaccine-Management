<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem thống kê</title>
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
                    <th>Địa chỉ</th>
                    <th>Tổng tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listStatistic as $s) {
                    echo "<tr>";
                    echo "<td>" . $s->idkh . "</td>";
                    echo "<td>" . $s->tenkh . "</td>";
                    echo "<td>" . $s->diachi . "</td>";
                    echo "<td>" . $s->tongtien . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>