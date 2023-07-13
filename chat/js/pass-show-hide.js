const pswrdField = document.querySelector(".form input[type='password']"),
    toggleBtn = document.querySelector(".form .form__field i");

toggleBtn.onclick = () => {
    if (pswrdField.type == "password") {
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    } else {
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}