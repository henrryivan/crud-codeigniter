window.addEventListener('load', recargar);

function recargar() {
	let peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			document.getElementById('tbody').innerHTML = this.responseText; //en el tag tbody agregamos toda la info
			asignarEventos();
		}
	};

	peticion.open('GET', 'demografias/recargar'); // Generamos la petición y lo mnadamos al controlador demografias función recargar
	peticion.send(); // Mandamos la petición
}

// Funcion para Asignar eventos a los botones agregar, editar, eliminar
function asignarEventos () {
	document.getElementById('btn').addEventListener('click', agregar);
	let btnsEdit = document.getElementsByClassName('btnEditar');
	let btnsElim = document.getElementsByClassName('btnEliminar');

	for (let i = 0; i < btnsEdit.length; i++) {
		btnsEdit[i].addEventListener('click', actualizar);
		btnsElim[i].addEventListener('click', eliminar);
	}
}

function agregar() {
	let id = document.getElementById('id').value;
	let titulo = document.getElementById('txtTitulo').value;
	let descripcion = document.getElementById('txtDescripcion').value;
	let peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			recargar();
			limpiarCampos();
			document.getElementById('btn').value = "ingresar";
			document.getElementById('btn').innerHTML = "Ingresar";
		}
	};

	let datos = 'titulo=' + titulo + "&descripcion=" + descripcion;

	if (this.value == "editar") {
		datos += '&id=' + id;
	}

	// console.log(this.value);

	peticion.open('POST', 'demografias/' + this.value);
	peticion.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	peticion.send(datos);
}

function eliminar () {
	let peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			recargar();
		}
	};

	peticion.open('GET', 'demografias/eliminar/' + this.value);
	peticion.send();
}

function actualizar() {
	let peticion = new XMLHttpRequest();

	peticion.onreadystatechange = function () {
		if (this.readyState == 4) {
			document.getElementById('form').innerHTML = this.responseText;
			recargar();
		}
	};

	peticion.open('GET', 'demografias/actualizar/' + this.value);
	peticion.send();
}

function limpiarCampos () {
	document.getElementById('txtTitulo').value = '';
	document.getElementById('txtDescripcion').value = '';
}
