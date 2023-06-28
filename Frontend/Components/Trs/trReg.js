export function RowRegion(region) {
  let tablaRegion = document.querySelector("#tabla");
  tablaRegion.innerHTML += `
    <tr id="${region.idReg}">
        <td>${region.idReg}</td>
        <td>${region.nombreReg}</td>
        <td>${region.idDep}</td>
        <td>${region.nombreDep}</td>
        <td>${region.idPais}</td>
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
