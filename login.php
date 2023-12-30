<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سایت آگهی و فروش nj</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/login/loginW.css">
    <link rel="stylesheet" media="screen and (min-width: 1200px)" href="./assets/style/login/loginW.css">
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1200px)" href="./assets/style/login/loginT.css">
    <link rel="stylesheet" media="screen and (min-width: 0 ) and (max-width: 768px)" href="./assets/style/login/loginM.css">

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
                    <h2>ورود</h2>
                    <p><a href="register.php">هنوز ثبت‌نام نکرده‌اید؟</a></p>
                </div>
                <form action="login.php" method="POST">
                    <div class="input-group">
                        <label for="email">ایمیل:</label><br>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">رمز عبور:</label><br>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <input type="submit" value="ورود" class="btn">
                    <p><a href="register.php">ثبت نام</a></p>
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