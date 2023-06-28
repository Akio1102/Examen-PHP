export function TablePais() {
  let container = document.querySelector("#container");
  container.innerHTML += `
    <h5 class="card-title fs-2 text-center text-light">Persona</h5>
    <div class="card-text font-monospace fs-6" >
      <table class="table table-dark table-hover mt-1">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRE</th>
              <th scope="col">ACCIONES</th>
            </tr>
          </thead>
          <tbody id="tabla"></tbody>
      </table>
    </div>
    `;
}
