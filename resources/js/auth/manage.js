const btnLogout = document.querySelectorAll(
    ".manage__container__table__logout"
);
const popupLogout = document.querySelectorAll(".manage__logout");
const overlay = document.querySelector(".manage__overlay");
const closeBtn = document.querySelectorAll(".manage-close-js");

const btnsChange = document.querySelectorAll(
    ".manage__container__table__change"
);

btnLogout.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        overlayPopup();
        popupLogout[index].classList.add("popup");
    });
});

const popupChange = document.querySelector(".manage__change");
const closeChange = document.querySelector(".manage-close-change-js");

const nameShow = document.querySelectorAll(".manage__container__table__name");
const emailShow = document.querySelectorAll(".manage__container__table__email");
const roleShow = document.querySelectorAll(".manage__container__table__role");
const numberphoneShow = document.querySelectorAll(
    ".manage__container__table__numberphone"
);

const idShow = document.querySelectorAll(".manage__container__table__id");
btnsChange.forEach((item, index) => {
    item.addEventListener("click", () => {
        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const role = document.getElementById("role");
        const id = document.getElementById("id");
        const numberphone = document.getElementById("numberphone");

        const nameChange = nameShow[index].textContent;
        const emailChange = emailShow[index].textContent;
        const roleChange = roleShow[index].textContent;
        const numberphoneChange = numberphoneShow[index].textContent;
        const idChange = idShow[index].getAttribute("value");
        const options = role.querySelectorAll(
            ".manage__input__content__option"
        );

        numberphone.setAttribute("value", numberphoneChange);
        name.setAttribute("value", nameChange);
        email.setAttribute("value", emailChange);
        id.setAttribute("value", idChange);

        options.forEach((option) => {
            if (option.getAttribute("value") == roleChange) {
                option.selected = true;
            }
        });

        changePopup();
    });
});

closeBtn.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        overlayPopup();
    });
});

closeChange.addEventListener("click", () => {
    overlayPopup();
});

overlay.addEventListener("click", () => {
    overlayPopup();
});

function changePopup() {
    popupChange.classList.toggle("popup");
    overlay.classList.toggle("popup");
}

function overlayPopup() {
    popupLogout.forEach((item) => {
        item.classList.remove("popup");
    });
    popupChange.classList.remove("popup");
    overlay.classList.toggle("popup");
}
