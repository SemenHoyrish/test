let ShowHideButton = document.querySelectorAll(".ShowHide-button");
let hiddenInput = document.querySelector(".hiddenInput");

if (ShowHideButton.length > 0) {
    for (let i = 0; i < ShowHideButton.length; i++) {
        ShowHideButton[i].addEventListener("click", function (e) {
            if (!ShowHideButton[i].classList.contains("active")) {
                hiddenInput.value += ShowHideButton[i].id + ".";
                ShowHideButton[i].classList.add("active");
            } else if (ShowHideButton[i].classList.contains("active")) {
                hiddenInput.value += ShowHideButton[i].id + ".";
                ShowHideButton[i].classList.remove("active");
            }
        });
    }
}
