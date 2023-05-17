import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const alert = document.querySelector("#alert");
const removeAlert = document.querySelector("#removeAlert");

document.querySelectorAll(".getAlert").forEach((item) => {
    item.addEventListener("click", () => {
        alert.classList.remove("d-none");
    });
});

removeAlert.addEventListener("click", function () {
    alert.classList.add("d-none");
});
