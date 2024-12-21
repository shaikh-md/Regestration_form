document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registrationForm");

    form.addEventListener("submit", function (event) {
        let valid = true;

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();

        if (name === "") {
            alert("Name is required!");
            valid = false;
        }

        if (email === "") {
            alert("Email is required!");
            valid = false;
        }

        if (phone === "") {
            alert("Phone number is required!");
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
