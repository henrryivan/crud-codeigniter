<?php

class DemografiasModel extends CI_Model {
	public function obtener() {
		return $this->db->get('info')->result(); // Obtenermos los datos de la tabla info
	}

	public function ingresar($datos) {
		$sql = "INSERT INTO info (titulo, descripcion) VALUES (?, ?)";
		$this->db->query($sql, $datos);
	}

	public function eliminar($id) {
		$this->db->query("DELETE FROM info WHERE id = $id");
	}

	public function obtenerPorId($id) {
		return $this->db->query("SELECT * FROM info WHERE id = $id")->row();
	}

	public function editar($datos) {
		$sql = "UPDATE info SET titulo = ?, descripcion = ? WHERE id = ?";
		$this->db->query($sql, $datos);
	}
}
