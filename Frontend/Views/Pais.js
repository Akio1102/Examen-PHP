//Import Method HTPP
import { GETPaises } from "../API/ConsumoAPI.js";

//Import Components
import { TablePais } from "../Components/Tables/tablePais.js";
import { RowPais } from "../Components/Trs/trPais.js";

//Elementos HTML
const container = document.querySelector("#container");
export function Paises() {
  container.innerHTML = "";
  TablePais();
  viewPaises();
}

async function viewPaises() {
  try {
    let pais = await GETPaises();
    if (pais == false) {
      alert(`No hay pais`);
    } else {
      pais.forEach((element) => {
        RowPais(element);
      });
    }
  } catch (error) {
    console.log(error);
  }
}
