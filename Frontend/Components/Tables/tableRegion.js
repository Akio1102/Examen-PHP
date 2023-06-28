export function TableRegion() {
  let container = document.querySelector("#container");
  container.innerHTML += `
    <h5 class="card-title fs-2 text-center text-light">Regiones</h5>
    <div class="card-text font-monospace fs-6" >
      <table class="table table-dark table-hover mt-1">
          <thead>
            <tr>
              <th>#</th>
              <th>NOMBRE REGION</th>
              <th>ID DEPARTAMENTO</th>
              <th>NOMBRE DEPARTAMENTO</th>
              <th>ID PAIS</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          </thead>
          <tbody id="tabla"></tbody>
      </table>
    </div>
    `;
}
