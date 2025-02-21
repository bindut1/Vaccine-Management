<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách vacxin</title>
    <link rel="stylesheet" href="../Style/XemKH.css">
</head>

<body>
    <div class="container">
        <h1>Danh sách vacxin</h1>
        <table>
            <thead>
                <tr>
                    <th>Mã vacxin</th>
                    <th>Tên vacxin</th>
                    <th>Tổng số mũi</th>
                    <th>Mô tả</th>
                    <th>Giá</th>
                    <th>Tên nhà sản xuất</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listVX as $vx) {
                    echo "<tr>";
                    echo "<td>" . $vx->idvx . "</td>";
                    echo "<td>" . $vx->tenvx . "</td>";
                    echo "<td>" . $vx->somuitiem . "</td>";
                    echo "<td>" . $vx->mota . "</td>";
                    echo "<td>" . $vx->gia . "</td>";
                    echo "<td>" . $vx->nhasanxuat . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>