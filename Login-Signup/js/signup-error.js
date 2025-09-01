document
  .getElementById("signup-form")
  .addEventListener("submit", function (event) {
    if (!iti.isValidNumber()) {
      event.preventDefault();
      Swal.fire({
        icon: "error",
        title: "خطأ",
        text: "الرجاء إدخال رقم جوال صحيح.",
      });
    }
  });
