<?php
$title = "Login";
require_once("./components/header.php");
?>

<link rel="stylesheet" href="./css/nav.css">
<link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <?php require("./components/nav.php") ?>

    <div class="wallpaper-login">
        <div class="container">
            
            <div class="content-login">
                <h1 class="text-title">Login</h1>
                <br>
                <form>
                    <div class="from-group mb-4">
                        <label for="email" class="form-label">ชื่อบัญชีผู้ใช้</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="from-group mb-4">
                        <label for="password" class="form-label">รหัสผ่าน</label>
                        <input type="password" class="form-control" id="InputPassword">
                    </div>
                    <a href="manage.php" type="submit" class="btn btn-primary mt-2">เข้าสู่ระบบ</a>
                </form>
            </div>

        </div>
    </div>
</body>

</html>