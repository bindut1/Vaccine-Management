<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm vacxin</title>
    <link rel="stylesheet" href="../Style/Timkiem.css">
    <script>
        function validateForm(event) {
            const fieldSelected = document.querySelector('input[name="field"]:checked');
            const inputValue = document.getElementById('infor').value.trim();

            if (!fieldSelected) {
                alert("Vui lòng chọn trường tìm kiếm!");
                event.preventDefault();
                return false;
            }

            if (inputValue === "") {
                alert("Vui lòng nhập thông tin tìm kiếm!");
                event.preventDefault();
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Tìm kiếm thông tin vacxin</h1>
        <form method="get" action="../Controller/C_VacXin.php" onsubmit="validateForm(event)">
            <div class="form-group">
                <input type="radio" name="field" value="id" id="id"><label for="id">IDVX</label>
                <input type="radio" name="field" value="name_vaccine" id="name_vaccine"><label for="name_vaccine">Tên Vacxin</label>
                <input type="radio" name="field" value="name_producer" id="name_producer"><label for="name_producer">Tên nhà sản xuất</label>
            </div>

            <div class="form-group">
                <label for="infor">Nhập thông tin:</label>
                <input type="text" name="infor" id="infor">
                <button type="submit">Tìm kiếm</button>
            </div>
            <input type="hidden" name="act" value="findVacxin">
        </form>

        <div>
            <?php
            if (isset($listVX)) {
                echo '<table>
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
                <tbody>';
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
                echo '</tbody></table>';
            }
            ?>
        </div>
    </div>
</body>

</html>