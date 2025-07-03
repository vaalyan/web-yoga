const form = document.querySelector("form");

form.addEventListener("submit", function (e) {
    const nombre = form.nombre.value.trim();
    const email = form.email.value.trim();
    const celular = form.celular.value.trim();
    const mensaje = form.mensaje.value.trim();

    if (!nombre || !email || !celular || !mensaje) {
        alert("Por favor, completa todos los campos.")
        e.preventDefault();
    } else if (!email.includes("@") || !email.includes(".")) {
        alert("Por favor, ingresa un correo válido.");
        e.preventDefault();
    }
});