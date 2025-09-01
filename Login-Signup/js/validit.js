const nameInput = document.querySelector("#username");
nameInput.addEventListener("input", function () {
  const name = nameInput.value;
  const isValid = name.length >= 2 && name.length <= 100;

  if (!isValid) {
    nameInput.setCustomValidity("اسم المستخدم يجب أن يتكون من 2 إلى 100 حرف.");
  } else {
    nameInput.setCustomValidity("");
  }
});

const passwordInput = document.querySelector("#password");
passwordInput.addEventListener("input", function () {
  const password = passwordInput.value;
  const hasUpperCase = /[A-Z]/.test(password);
  const hasLowerCase = /[a-z]/.test(password);
  const hasNumbers = /\d/.test(password);
  const hasSpecialChars = /[!@#$%^&*]/.test(password);
  const isValid =
    hasUpperCase &&
    hasLowerCase &&
    hasNumbers &&
    hasSpecialChars &&
    password.length >= 8;

  if (!isValid) {
    passwordInput.setCustomValidity(
      "كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل، بما في ذلك حرف كبير، حرف صغير، رقم، ورمز خاص."
    );
  } else {
    passwordInput.setCustomValidity("");
  }
});

const phone_input = document.querySelector("#phone");
var iti = window.intlTelInput(phone_input, {
  initialCountry: "sa",
  strictMode: true,
  loadUtils: () =>
    import(
      "https://cdn.jsdelivr.net/npm/intl-tel-input@25.7.0/build/js/utils.js"
    ),
});

var handleChange = function () {
  if (phone_input.value) {
    if (iti.isValidNumber()) {
      document.getElementById("full_phone_number").value = iti.getNumber();
    }
  }
};

phone_input.addEventListener("countrychange", handleChange);
phone_input.addEventListener("keyup", handleChange);
