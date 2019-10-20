<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function dashboard(){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$college_id = $this->session->userdata('college_id');
		$data['students'] = $this->query->getStudents($college_id);
		$this->load->view('users',$data);
	}
}
?>