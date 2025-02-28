const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

// Abrir el menú al hacer clic en el ícono de hamburguesa
abrir.addEventListener("click", () => {
    nav.classList.add("visible");
});

// Cerrar el menú al hacer clic en el botón de cerrar
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
});
