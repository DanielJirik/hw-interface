let div = document.querySelector(".user");
let icon = document.querySelector(".navbar li");

if (div !== null && icon !== null) {
    div.style.display = "none";
    div.addEventListener("mouseleave", hide);
    icon.addEventListener("mouseleave", hide);
    icon.addEventListener("click", show);
}

function show() {
    if (div.style.display == "none")
        div.style.display = "block";
    else
        div.style.display = "none"
}

function hide(event) {
    if (event.srcElement == icon && !document.querySelector(".user:hover")){
        div.style.display = "none";
    }
    else {
        if (!document.querySelector(".user:hover"))
            div.style.display = "none";
    }
}