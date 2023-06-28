export function RowPais(pais) {
  let tablaPais = document.querySelector("#tabla");
  tablaPais.innerHTML += `
    <tr id="${pais.idPais}">
        <td>${pais.idPais}</td>
        <td>${pais.nombrePais}</td>
        <td>
          <button data-accion="editar" class="btn btn-warning" id="editPais" data-bs-toggle="modal" data-bs-target= "#modalPaisEdit">
            <i class="bi bi-pencil-square"></i> Editar
          </button> 
          <button data-accion="eliminar" class="btn btn-danger">
            <i class="bi bi-trash"></i> Eliminar
          </button>
        </td>
    </tr>
    `;
}
