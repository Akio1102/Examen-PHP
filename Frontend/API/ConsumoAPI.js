const headers = new Headers({ "Content-Type": "application/json" });
const URL = `http://localhost/ArTeM02-064/Examen-PHP/Backend/Controllers/`;

// Geters
export const GETPaises = async () => {
  try {
    const result = await fetch(`${URL}Pais.controllers.php?op=GetAll`);
    const datos = await result.json();
    return datos;
  } catch (error) {
    console.log(error);
  }
};

export const GETDepartamento = async () => {
  try {
    const result = await fetch(`${URL}Departamento.controllers.php?op=GetAll`);
    const datos = await result.json();
    return datos;
  } catch (error) {
    console.log(error);
  }
};

export const GETRegion = async () => {
  try {
    const result = await fetch(`${URL}Region.controllers.php?op=GetAll`);
    const datos = await result.json();
    return datos;
  } catch (error) {
    console.log(error);
  }
};

export const GETCampers = async () => {
  try {
    const result = await fetch(`${URL}Camper.controllers.php?op=GetAll`);
    const datos = await result.json();
    return datos;
  } catch (error) {
    console.log(error);
  }
};
