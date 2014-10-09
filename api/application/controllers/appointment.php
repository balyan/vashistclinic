<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Content-Type: application/json');

class Appointment extends CI_Controller {

	public function index() {
		$this->load->model('appointment_model');
		$this->appointment_model->add();

		$this->load->model('dateTime_model');
		$this->dateTime_model->checkAvailability();
	}

}