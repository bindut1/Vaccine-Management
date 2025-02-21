<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử tiêm</title>
    <link rel="stylesheet" href="../Style/XemKH.css">
</head>

<body>
    <div class="container">
        <h1>Lịch sử tiêm của:
            <?php echo $name ?>
        </h1>
        <table>
            <thead>
                <tr>
                    <th>Tên bệnh</th>
                    <th>Tên Vacxin</th>
                    <th>Tổng mũi</th>
                    <th>Số thứ tự mũi</th>
                    <th>Ngày tiêm</th>
                    <th>Ngày tiêm tiếp theo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listLog as $log) {
                    echo "<tr>";
                    echo "<td>" . $log->tenbenh . "</td>";
                    echo "<td>" . $log->tenvx . "</td>";
                    echo "<td>" . $log->tongmui . "</td>";
                    echo "<td>" . $log->sttmui . "</td>";
                    echo "<td>" . $log->ngaytiem . "</td>";
                    echo "<td>" . $log->ngaytiemtieptheo . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>