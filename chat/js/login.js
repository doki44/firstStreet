const form = document.querySelector(".login form"),
    continueBtn = document.querySelector(".form__btn"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "config/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "Успех") {
                    location.href = "users.php";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }

            }

        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}