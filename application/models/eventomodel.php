<?php

class Eventomodel extends CI_Model {
	public function agregar($datos){
		/*
		 * Hashtag único
		 */
		return $this->db->insert('eventos',$datos);
	}
	
	/**
	 * Regresa todos los registros de eventos
	 * http://codeigniter.com/user_guide/database/active_record.html
	 */
	public function select(){
		return array();
	}
}