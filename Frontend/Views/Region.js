//Import Method HTPP
import { GETRegion } from "../API/ConsumoAPI.js";

//Import Components
import { TableRegion } from "../Components/Tables/tableRegion.js";
import { RowRegion } from "../Components/Trs/trReg.js";

//Elementos HTML
const container = document.querySelector("#container");
export function Regiones() {
  container.innerHTML = "";
  TableRegion();
  viewDepartamentos();
}

async function viewDepartamentos() {
  try {
    let region = await GETRegion();
    if (region == false) {
      alert(`No hay Regiones`);
    } else {
      region.forEach((element) => {
        RowRegion(element);
      });
    }
  } catch (error) {
    console.log(error);
  }
}
