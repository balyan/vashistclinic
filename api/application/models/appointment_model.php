<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment_model extends CI_Model {

	protected $dateTime;

	public function add() {
		echo "adddd";
		$this->load->model('dateTime_model');
		$this->dateTime_model->validate();
	}

	public  function edit() {

	}

	public function cancel() {

	}

}