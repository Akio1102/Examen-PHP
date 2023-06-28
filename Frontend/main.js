//Render de la data Db
import { Paises } from "./Views/Pais.js";
import { Departamentos } from "./Views/Departamento.js";
import { Regiones } from "./Views/Region.js";
import { Campers } from "./Views/Camper.js";
// Seleccionar Contenedores
const pais = document.querySelector("#Pais");
const departamento = document.querySelector("#Departamento");
const region = document.querySelector("#Region");
const campers = document.querySelector("#Campers");

pais.addEventListener("click", (e) => {
  e.preventDefault();
  Paises();
});

departamento.addEventListener("click", (e) => {
  e.preventDefault();
  Departamentos();
});

region.addEventListener("click", (e) => {
  e.preventDefault();
  Regiones();
});

campers.addEventListener("click", (e) => {
  e.preventDefault();
  Campers();
});
