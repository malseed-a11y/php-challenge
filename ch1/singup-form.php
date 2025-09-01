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
            <img src="../ch1/img/pexels-eberhardgross-443446.jpg" alt="">

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
                <p>لديك حساب؟ <a href="index.php">تسجيل الدخول</a></p>
            </form>
        </div>
    </div>

    <script>
        const nameInput = document.querySelector("#username");
        nameInput.addEventListener("input", function() {
            const name = nameInput.value;
            const isValid = name.length >= 2 && name.length <= 100;

            if (!isValid) {
                nameInput.setCustomValidity("اسم المستخدم يجب أن يتكون من 2 إلى 100 حرف.");
            } else {
                nameInput.setCustomValidity("");
            }
        });

        const passwordInput = document.querySelector("#password");
        passwordInput.addEventListener("input", function() {
            const password = passwordInput.value;
            const hasUpperCase = /[A-Z]/.test(password);
            const hasLowerCase = /[a-z]/.test(password);
            const hasNumbers = /\d/.test(password);
            const hasSpecialChars = /[!@#$%^&*]/.test(password);
            const isValid = hasUpperCase && hasLowerCase && hasNumbers && hasSpecialChars && password.length >= 8;

            if (!isValid) {
                passwordInput.setCustomValidity("كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل، بما في ذلك حرف كبير، حرف صغير، رقم، ورمز خاص.");
            } else {
                passwordInput.setCustomValidity("");
            }
        });

        const phone_input = document.querySelector("#phone");
        var iti = window.intlTelInput(phone_input, {
            initialCountry: "sa",
            strictMode: true,
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/js/utils.js"),
        });


        var handleChange = function() {

            if (phone_input.value) {
                if (iti.isValidNumber()) {
                    document.getElementById("full_phone_number").value = iti.getNumber();
                }
            }
        };

        phone_input.addEventListener('countrychange', handleChange);
        phone_input.addEventListener('keyup', handleChange);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("signup-form").addEventListener("submit", function(event) {
            if (!iti.isValidNumber()) {
                event.preventDefault();
                Swal.fire({
                    icon: 'error',
                    title: 'خطأ',
                    text: 'الرجاء إدخال رقم جوال صحيح.',
                });
            }
        });
    </script>

</body>

</html>