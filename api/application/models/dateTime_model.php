<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DateTime_model extends CI_Model {

	// Variable to set Date
	protected $date;

	//Variable to set Time
	protected $time;

	public function validate() {
		echo "Date";
	}

	public function checkAvailability() {
		echo "Avail";
	}

}