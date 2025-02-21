<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../Style/login.css">
</head>

<body>
  <div class="login-container">
    <h2>Đăng nhập</h2>
    <?php
    if (isset($_GET['tryAgain']) && $_GET['tryAgain'] == 1) {
      echo "<p style='color: red;'>Sai tên tài khoản hoặc mật khẩu</p>";
    }
    ?>
    <form action="../Controller/C_Login.php" method="POST">
      <div>
        <label for="username" class="us">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password" class="pw">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="confirm">
        <input type="submit" value="OK" class="ok">
        <input type="reset" value="Reset" class="reset">
      </div>
      <div>
        <a href="../View/dangky.php" style="text-decoration: none; padding-left: 20px;">Bạn chưa có tài khoản? Đăng ký ngay?</a>
      </div>
      <input type="hidden" name="act" value="checkLogin">
    </form>
  </div>
</body>

</html>