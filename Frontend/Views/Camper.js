//Import Method HTPP
import { GETCampers } from "../API/ConsumoAPI.js";

//Import Components
import { TableCamper } from "../Components/Tables/tableCamp.js";
import { RowCamper } from "../Components/Trs/trCamp.js";

//Elementos HTML
const container = document.querySelector("#container");
export function Campers() {
  container.innerHTML = "";
  TableCamper();
  viewDepartamentos();
}

async function viewDepartamentos() {
  try {
    let camper = await GETCampers();
    if (camper == false) {
      alert(`No hay Camper`);
    } else {
      camper.forEach((element) => {
        RowCamper(element);
      });
    }
  } catch (error) {
    console.log(error);
  }
}
