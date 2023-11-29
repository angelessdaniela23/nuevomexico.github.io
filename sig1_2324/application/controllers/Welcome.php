<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');//Cargando Cabecera
		$this->load->view('welcome_message');//Cargando Contenido
		$this->load->view('footer');//Cargando Pie
	}
	public function universidad()
	{
		$this->load->view('header');//Cargando Cabecera
		$this->load->view('universidad');//Cargando Contenido
		$this->load->view('footer');//Cargando Pie
	}
	public function ciudad()
	{
		$this->load->view('header');//Cargando Cabecera
		$this->load->view('ciudad');//Cargando Contenido
		$this->load->view('footer');//Cargando Pie
	}

}//Cierre de clase
