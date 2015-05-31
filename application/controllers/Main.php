<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

public function __construct(){
	parent::__construct();

	/*These are the main pages in the site. These were on every public function
	but they have been moved to the parent construct to reduce redundancy */

				$this->load->view("header");
				$this->load->view("navBar/site_nav");

}

public function index(){
	$data["message"] = "";
	$this->load->view("homepage", $data);
  }

public function about(){
	$data["message"] = "";
	$this->load->view("aboutUs", $data);
		}

public function contact(){

		}

public function priorEvents(){

		}
}
?>
