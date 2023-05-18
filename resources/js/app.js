import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteBtns = document.querySelectorAll(".formDelete");

deleteBtns.forEach((button) => {
    button.addEventListener("click", (event) => {
        event.preventDefault();

        const modal = document.getElementById("alertId");

        const bootstrapModal = new bootstrap.Modal(modal);

        bootstrapModal.show();

        const confirmDeletebtn = modal.querySelector(".btn.btn-danger");

        confirmDeletebtn.addEventListener("click", () => {
            button.submit();
        });
    });
});
