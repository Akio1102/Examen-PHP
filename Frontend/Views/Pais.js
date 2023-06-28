//Import Method HTPP
import { GETPaises } from "../API/ConsumoAPI.js";

//Import Components
import { TablePais } from "../Components/Tables/tablePais.js";
import { RowPais } from "../Components/Trs/trPais.js";

export function Paises() {
  TablePais();
  viewPaises();
}

async function viewPaises() {
  try {
    let personas = await GETPaises();
    if (personas == false) {
      alert(`No hay Personas`);
    } else {
      personas.forEach((element) => {
        RowPais(element);
      });
    }
  } catch (error) {
    console.log(error);
  }
}
