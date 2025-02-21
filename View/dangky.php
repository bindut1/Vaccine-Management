<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="../Style/register.css">
    <script>
        function checkUsername() {
            const username = document.getElementById('username').value;
            const spanMessage = document.getElementById('check-username-message');
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;

            if (username.trim() === "") {
                spanMessage.textContent = "Vui lòng nhập username!";
                spanMessage.style.color = "red";
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("GET", `../Controller/C_Register.php?act=checkUsername&username=${encodeURIComponent(username)}`, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    if (xhr.responseText.trim() === "exist") {
                        spanMessage.textContent = "Username đã tồn tại!";
                        spanMessage.style.color = "red";
                    } else if (xhr.responseText.trim() === "ok") {
                        spanMessage.textContent = "Username hợp lệ.";
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
    <div class="login-container">
        <h2>Đăng ký</h2>
        <span id="check-username-message"></span>
        <form action="../Controller/C_Register.php" method="POST">
            <div>
                <label for="username" class="us">Username</label>
                <input type="text" id="username" name="username" onkeyup="checkUsername()" required>
            </div>
            <div>
                <label for="password" class="pw">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="fullname" class="name">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>
            <div>
                <label for="email" class="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="phone" class="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label for="address" class="address">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="confirm">
                <input type="submit" value="Register" class="ok" id="submitBtn">
                <input type="reset" value="Reset" class="reset">
            </div>
            <div>
                <a href="../View/dangnhap.php" style="text-decoration: none; padding-left: 40%;">Đăng nhập</a>
            </div>
            <input type="hidden" name="act" value="register">
        </form>
    </div>
</body>

</html>