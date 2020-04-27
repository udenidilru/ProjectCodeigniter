<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function dashboard(){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$users = $this->query->viewAllColleges();
		$this->load->view('dashboard',['users' => $users]);
		$this-> load ->view('footer.php');
	}
	public function addCollege(){
		$this-> load ->view('header.php');
		$this->load->view('addCollege');
		$this-> load ->view('footer.php');
	}
	public function addStudent(){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$data['colleges'] = $this->query->getColleges();
		$this->load->view('addStudent',$data);
		$this-> load ->view('footer.php');
	}
	public function createCollege(){
		$this-> load ->view('header.php');
		$this->form_validation->set_rules('collegename','College Name','required');
		$this->form_validation->set_rules('branch','Branch','required');
		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('query');
			if($this->query->makeCollege($data)){
				$this->session->set_flashdata('message','College Created Successfully!');
			}else{
				$this->session->set_flashdata('message','Failed to Create College!');
			}
			return redirect("admin/addCollege");
		}else{
			$this->addCollege();
		}
	}

	public function addCoadmin(){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$data['roles'] = $this->query->getRoles();
		$data['colleges'] = $this->query->getColleges();
		$this-> load ->view('addCoadmin',$data);
		$this-> load ->view('footer.php');
		
	}

	public function createCoadmin(){
		$this-> load ->view('header.php');
		$this->form_validation->set_rules('user_name','User_name','required');
		$this->form_validation->set_rules('college_id','College Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('role_id','Role','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confpwd','Password Again','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run() ){
			$data = $this->input->post();
			$data['password'] = sha1($this->input->post('password'));
			$data['confpwd'] = sha1($this->input->post('confpwd'));
			
			$this->load->model('query');
			if($this->query->registerCoadmin($data)){
				$this->session->set_flashdata('message','Co Admin Registered Successfully');
				
			}
			else{
				$this->session->set_flashdata('message','Failed to Register Admin');
				
			}
			return redirect("admin/addCoadmin");
		}
		else{
			$this->addCoadmin();
		}

	}

	public function createStudent(){
		$this-> load ->view('header.php');
		$this->form_validation->set_rules('studentname','Student Name','required');
		$this->form_validation->set_rules('college_id','College Name','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run() ){
			$data = $this->input->post();
			$this->load->model('query');
			if($this->query->insertStudent($data)){
				$this->session->set_flashdata('message','Student Added Successfully');
				
			}
			else{
				$this->session->set_flashdata('message','Failed to Add Student');
				
			}
			return redirect("admin/addStudent");
		}
		else{
			$this->addStudent();
		}
	}

	public function viewStudents($college_id){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$data['students'] = $this->query->getStudents($college_id);
		$this->load->view('viewStudents',$data);
		$this-> load ->view('footer.php');
	}

	public function editStudent($id){
		$this-> load ->view('header.php');
		$this->load->model('query');
		$data['studentData'] = $this->query->getStudentRecord($id);
		$this->load->view('editStudent',$data);
		$this-> load ->view('footer.php');
	}

	public function deleteStudent($id){
		$this->load->model('query');
		if($this->query->removeStudent($id)){
			return redirect("admin/dashboard");
		}
	}
	public function coadmins(){
		
		$this-> load ->view('header.php');
		$this->load->model('query');
		$coadmins = $this->query->viewAllCoadmins();
		$this->load->view('viewCoadmins',['coadmins' => $coadmins]);
		$this-> load ->view('footer.php');
	}

	public function _construct(){
		parent::_contruct();

		if(!$this->session-userdata("user_id"))
			return redirect("home_c/login");

	}

}
?>