// buscador.js
document.addEventListener("keyup", (e) => {
    if (e.target.matches("#buscador")) {
      // Limpiar el campo si se presiona "Escape"
      if (e.key === "Escape") e.target.value = "";
  
      document.querySelectorAll(".curso").forEach((curso) => {
        curso.textContent.toLowerCase().includes(e.target.value.toLowerCase())
          ? curso.classList.remove("filtro")
          : curso.classList.add("filtro");
      });
    }
  });
  