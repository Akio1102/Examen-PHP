export function RowDepartamento(departamento) {
  let tablaDepartamento = document.querySelector("#tabla");
  tablaDepartamento.innerHTML += `
    <tr id="${departamento.idDep}">
        <td>${departamento.idDep}</td>
        <td>${departamento.nombreDep}</td>
        <td>${departamento.idPais}</td>
        <td>${departamento.nombrePais}</td>
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
