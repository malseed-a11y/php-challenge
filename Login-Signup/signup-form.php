<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/css/intlTelInput.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/js/intlTelInput.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- يمين: الصورة -->
        <div class="image-side">
            <img src="./img/pexels-eberhardgross-443446.jpg" alt="">

        </div>

        <!-- يسار: الفورم -->
        <div class="form-side">
            <h2>إنشاء حساب</h2>
            <form id="signup-form" action="signup.php" method="post">
                <label for="username">
                    اسم المستخدم:
                </label>
                <input type="text" id="username" name="username" placeholder="أدخل اسم المستخدم" required>

                <label for="password">
                    كلمة المرور:
                </label>
                <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور" required>

                <label for="phone">
                    رقم الجوال:
                </label>
                <input id="phone" type="tel" name="phone" required>

                <input type="hidden" id="full_phone_number" name="full_phone_number">

                <input type="submit" value="ارسل">
                <p>لديك حساب؟ <a href="login-form.php">تسجيل الدخول</a></p>
            </form>
        </div>
    </div>

    <script src="./js/validit.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/signup-error.js"></script>



</body>

</html>