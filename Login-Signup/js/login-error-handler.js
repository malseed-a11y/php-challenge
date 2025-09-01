document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);

  if (params.has("error")) {
    const errorMessage = (params.get("error") || "حدث خطأ غير متوقع").slice(
      0,
      300
    );

    Swal.fire({
      icon: "error",
      title: "opss...",
      text: errorMessage,
    });
  }
});
