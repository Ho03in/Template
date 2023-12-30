<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت آگهی و فروش nj</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/login/loginW.css">
</head>

<body>


    <?php include __DIR__ . "../views/templates/header.php"; ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>فرم ورود</title>
        <link rel="stylesheet" href="styles.css"> <!-- اتصال به فایل CSS -->
    </head>

    <body>
        <div class="login">

            <div class="form-half">
                <div class="head-form">
                    <h2>ثبت‌نام</h2>
                    <p><a href="login.php">قبلاً ثبت‌نام کرده‌اید؟</a></p>
                </div>
                <form action="register.php" method="POST">
                    <div class="input-group">
                        <label for="email">ایمیل:</label><br>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="mobile">موبایل:</label><br>
                        <input type="tel" id="mobile" name="mobile" required>
                    </div>
                    <div class="input-group">
                        <label for="fullname">نام و نام خانوادگی:</label><br>
                        <input type="text" id="fullname" name="fullname" required>
                    </div>
                    <div class="input-group">
                        <label for="password">رمز عبور:</label><br>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="input-group">
                        <label for="confirm_password">تکرار رمز عبور:</label><br>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                    <input type="submit" value="ثبت نام" class="btn">
                    <p><a href="login.php">ورود</a></p>
                </form>
            </div>
            <div class="image-half">
                <img src="./assets/img/greens.png" alt="عکس">
            </div>
        </div>

    </body>


    </html>
    <?php include __DIR__ . "../views/templates/footer.php"; ?>
</body>

</html>