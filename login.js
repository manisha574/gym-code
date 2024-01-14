let login = document.getElementById("login");
let form = document.getElementById("align");
let grid = document.getElementById("grid");
let body = document.getElementById("body");
let cut = document.getElementById("cut");
let cancelIcon = document.getElementById("cancelIcon");
let home = document.getElementById("home");
let about = document.getElementById("about");
let services = document.getElementById("services");
let contact = document.getElementById("contact");



body.addEventListener("click", (e) => {
    if (e.target === login) {
        form.style.display = "block";
    } else if (e.target === cut || e.target === cancelIcon) {
        form.style.display = "none";
    } else if (e.target === home || e.target === about || e.target === services || e.target === contact) {
        alert("Create an account!");
    }
});
