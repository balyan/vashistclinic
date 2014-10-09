<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DateTime_model extends CI_Model {

	// Variable to set Date
	protected $_date;

	//Variable to set Time
	protected $_time;

	public function validate() {
		echo "Validate";
	}

	public function checkAvailability() {
		echo "Avail";
	}

	public function get() {

	}

	public function set($date, $time) {
		$this->_date = $date;
		$this->_time = $time;
	}

}