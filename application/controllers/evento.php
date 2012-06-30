<?php

class Evento extends CI_Controller {
	
	public function agregar() {
		$datos['nombre'] = $this->input->get('nombre');
		$datos['hashtag'] = $this->input->get('hashtag');
		
		/*
		 * Validaciones
		 * http://codeigniter.com/user_guide/libraries/form_validation.html
		 */

		$this->load->model('EventoModel');
		$success = $this->EventoModel->agregar($datos);
		
		echo $success;
		// $this->load->view('evento_agregado');
	}
}