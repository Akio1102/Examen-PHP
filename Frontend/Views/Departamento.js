//Import Method HTPP
import { GETDepartamento } from "../API/ConsumoAPI.js";

//Import Components
import { TableDepartamento } from "../Components/Tables/tableDep.js";
import { RowDepartamento } from "../Components/Trs/trDep.js";

//Elementos HTML
const container = document.querySelector("#container");
export function Departamentos() {
  container.innerHTML = "";
  TableDepartamento();
  viewDepartamentos();
}

async function viewDepartamentos() {
  try {
    let departamento = await GETDepartamento();
    if (departamento == false) {
      alert(`No hay departamento`);
    } else {
      departamento.forEach((element) => {
        RowDepartamento(element);
      });
    }
  } catch (error) {
    console.log(error);
  }
}
