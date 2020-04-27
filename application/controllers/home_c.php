<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {

	public function index(){
		$this-> load ->view('footer.php');
		$this->load->model('query');
		$chkAdminExist = $this->query->chkAdminExist();
		$this-> load ->view('home',['chkAdminExist' => $chkAdminExist]);
	//	$this-> load ->view('footer.php');
	}
	public function adminRegister() {
		$this-> load ->view('header.php');
		$this->load->model('query');
		$data['roles'] = $this->query->getRoles();
		$this-> load ->view('register',$data);
	//	$this-> load ->view('footer.php');
	}
	public function adminSignup(){
		$this-> load ->view('header.php');
		$this->form_validation->set_rules('user_name','User_name','required');
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
			if($this->query->registerAdmin($data)){
				$this->session->set_flashdata('message','Admin Registered Successfully');
				return redirect("home_c/adminRegister");
			}
			else{
				$this->session->set_flashdata('message','Failed to Register Admin');
				return redirect("home_c/adminRegister");
			}
		}
		else{
			$this->adminRegister();
		}

	}
	public function login(){
		$this-> load ->view('header.php');
		if($this->session->userdata("user_id"))
			return redirect("home_c/dashboard");
		$this->load->view('login');
	//	$this-> load ->view('footer.php');
	}
	public function signin(){
		$this-> load ->view('header.php');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run() ){
			$email = $this->input->post('email');
			$password = sha1($this->input->post('password'));
			$this->load->model('query');
			$userExist = $this->query->adminExist($email,$password);
			
			if($userExist){
				if($userExist->user_id == '1'){
					$sessionData = [
					'user_id'=> $userExist->user_id,
					'user_name'=>$userExist->user_name,
					'email'=>$userExist->email,
					'role_id'=>$userExist->role_id
				];
					$this->session->set_userdata($sessionData);
					return redirect("admin/dashboard"); 
				}
				else if($userExist->user_id > '1'){
					$sessionData = [
					'user_id'=> $userExist->user_id,
					'user_name'=>$userExist->user_name,
					'email'=>$userExist->email,
					'college_id'=>$userExist->college_id,
					'role_id'=>$userExist->role_id
				];
					//$this->session->set_userdata($sessionData);
					//return redirect("users/dashboard"); 
				$this->session->set_userdata($sessionData);
					return redirect("admin/dashboard"); 
				}
				
			}
			else{
				$this->session->set_flashdata('message','Email or Password is Incorrect');
				return redirect("home_c/login");
			}
		}
		else{
			$this->login();
		}
	}
	public function logout(){
		$this->session->unset_userdata("user_id");
		return redirect("home_c/login");
	}
}

?>

