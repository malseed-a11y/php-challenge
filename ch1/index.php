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
            <img src="../ch1/img/pexels-eberhardgross-443446.jpg" alt="">

        </div>

        <!-- يسار: الفورم -->
        <div class="form-side">
            <h2>تسجيل الدخول</h2>
            <form action="login.php" method="post">
                <label for="username-phone">اسم المستخدم | رقم الجوال</label>
                <input type="text" id="username-phone" name="username-phone" placeholder="أدخل اسم المستخدم أو رقم الجوال">

                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" placeholder="أدخل كلمة المرور">

                <button type="submit">ارسل</button>
                <p>ليس لديك حساب؟ <a href="singup-form.php">إنشاء حساب</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const params = new URLSearchParams(window.location.search);

            if (params.has('error')) {

                const errorMessage = (params.get('error') || 'حدث خطأ غير متوقع').slice(0, 300);

                Swal.fire({
                    icon: 'error',
                    title: 'opss...',
                    text: errorMessage,

                });
            }
        });
    </script>
</body>

</html>