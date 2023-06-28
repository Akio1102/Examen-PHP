export function TableCamper() {
  let container = document.querySelector("#container");
  container.innerHTML += `
    <h5 class="card-title fs-2 text-center text-light">Regiones</h5>
    <div class="card-text font-monospace fs-6" >
      <table class="table table-dark table-hover mt-1">
          <thead>
            <tr>
              <th>#</th>
              <th>NOMBRE CAMPER</th>
              <th>APELLIDO CAMPER</th>
              <th>FECHA NACIMIENTO</th>
              <th>ID REG</th>
              <th>NOMBRE REGION</th>
              <th>ID DEPARTAMENTO</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          </thead>
          <tbody id="tabla"></tbody>
      </table>
    </div>
    `;
}
