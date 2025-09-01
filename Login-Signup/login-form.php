<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">

        <div class="image-side">
            <img src="./img/pexels-eberhardgross-443446.jpg" alt="">

        </div>


        <div class="form-side">
            <h2>تسجيل الدخول</h2>
            <form action="login.php" method="post">
                <label for="username-phone">اسم المستخدم | رقم الجوال</label>
                <input type="text" id="username-phone" name="username-phone" placeholder="أدخل اسم المستخدم أو رقم الجوال">

                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور">

                <button type="submit">ارسل</button>
                <p>ليس لديك حساب؟ <a href="signup-form.php">إنشاء حساب</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/login-error-handler.js"></script>
</body>

</html>