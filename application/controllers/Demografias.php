<?php

class Demografias extends CI_Controller {
	public function index() {
		$this->load->view('demografias/index'); // Cargamos la vista idex de la carpeta demografias
	}

	public function recargar() {
		$datos = ['demografias' => $this->demografiasModel->obtener()];
		$this->load->view('demografias/tabla', $datos); // Mandamos a cargar la vvista tabla
	}

	public function ingresar() {
		$datos = [$_POST['titulo'], $_POST['descripcion']];
		$this->demografiasModel->ingresar($datos);
	}

	public function eliminar($id) {
		$this->demografiasModel->eliminar($id);
	}

	public function actualizar($id) {
		$datos = ['demografia' => $this->demografiasModel->obtenerPorId($id)];
		$this->load->view('demografias/form', $datos);
	}

	public function editar() {
		$datos = [$_POST['titulo'], $_POST['descripcion'], $_POST['id']];
		$this->demografiasModel->editar($datos);
	}
}
