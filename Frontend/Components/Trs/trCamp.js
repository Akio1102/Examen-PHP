export function RowCamper(camper) {
  let tablaCamper = document.querySelector("#tabla");
  tablaCamper.innerHTML += `
    <tr id="${camper.idCamper}">
        <td>${camper.idCamper}</td>
        <td>${camper.nombreCamper}</td>
        <td>${camper.apellidoCamper}</td>
        <td>${camper.fechaNac}</td>
        <td>${camper.idReg}</td>
        <td>${camper.nombreReg}</td>
        <td>${camper.idDep}</td>
        <td>
          <button data-accion="editar" class="btn btn-warning" id="editPais" data-bs-toggle="modal" data-bs-target= "#modalPaisEdit">
            <i class="bi bi-pencil-square"></i> Editar
          </button> 
        </td>
        <td>
          <button data-accion="eliminar" class="btn btn-danger">
            <i class="bi bi-trash"></i> Eliminar
          </button>
        </td>
    </tr>
    `;
}
