<?php

class Evento extends CI_Controller {
	
	public function agregar() {
		$datos['nombre'] = $this->input->get('nombre');
		$datos['hashtag'] = $this->input->get('hashtag');
		$datos['desc'] = $this->input->get('descripcion');
		$datos['direccion'] = $this->input->get('direccion');//anteriormente lugar // null
		$datos['url'] = $this->input->get('url');//anteriormente mapa // null
		$datos['fecha_creado'] = $this->input->get('fecha_creado');
		$datos['fecha_evento'] = $this->input->get('fecha_evento');
		$datos['fecha_cierre'] = $this->input->get('fecha_cierre');
		$datos['privacidad'] = $this->input->get('privacidad');
		$datos['contrasena'] = $this->input->get('contrasena');
		
		
		/*
		 * Validaciones
		 * http://codeigniter.com/user_guide/libraries/form_validation.html
		 */
		if ($datos['nombre'] == false){
			return false;
		 }
		 if ($datos['hashtag'] == false){
			return false;
		 }
		 if ($datos['desc'] == false){
			return false;
		 }
		 if ($datos['fecha_creado'] == false){
			return false;
		 }
		 if ($datos['fecha_evento'] == false){
			return false;
		 }
		 if ($datos['fecha_cierre'] == false){
			return false;
		 }
		 if ($datos['privacidad'] == 1){
			if ($datos['contrasena'] == false) {
				return false;
		 }
		 }
		 else
		 {
			 if ($datos['contrasena'] != false) {
				 return false;
		 
		 }
		 }		 
		
		 

		$this->load->model('EventoModel');
		$success = $this->EventoModel->agregar($datos);
		
		echo $success;
		// $this->load->view('evento_agregado');
	}
}