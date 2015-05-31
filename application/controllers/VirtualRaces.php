<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VirtualRaces extends CI_Controller {

public function __construct(){
	parent::__construct();

	/*These are the main pages in the site. These were on every public function
	but they have been moved to the parent construct to reduce redundancy */

				$this->load->view("header");
				$this->load->view("navBar/site_nav");

}

public function index(){
	$data["message"] = "";
	}


public function breastCancer(){
		$data["message"] = "";
		$this->load->view("virtualRaces/breastCancer", $data);
	  }

public function military(){
		$data["message"] = "";
		$this->load->view("virtualRaces/military", $data);
	  }

public function autism(){
		$data["message"] = "";
		$this->load->view("virtualRaces/autism", $data);
	  }

public function animal(){
		$data["message"] = "";
		$this->load->view("virtualRaces/animal", $data);
	  }




}
?>
