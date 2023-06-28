import { Paises } from "./Views/Pais.js";

// Seleccionar Contenedores
const container = document.querySelector("#container");
const pais = document.querySelector("#Pais");

pais.addEventListener("click", (e) => {
  e.preventDefault();
  container.innerHTML = "";
  Paises();
});
