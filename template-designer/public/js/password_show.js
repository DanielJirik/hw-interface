let password_icon = document.querySelector("#password_icon");
let password_input = document.querySelector(".input:nth-child(3) input");
let lock_icon = document.querySelector("#lock");

var shown = false;

password_icon.onclick = function() {
    if (shown) {
        password_input.type = "password";
        lock_icon.classList.remove("fa-lock-open");
        lock_icon.classList.add("fa-lock");
    }
    else
    {
        password_input.type = "text";
        lock_icon.classList.remove("fa-lock");
        lock_icon.classList.add("fa-lock-open");
    }

    shown = !shown;
};