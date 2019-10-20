<?php
	class query extends CI_Model{

		public function getRoles(){
			$roles = $this->db->get('roles');
			if($roles->num_rows() > 0){
				return $roles->result();
			}
		}
		public function getColleges(){
			$colleges = $this->db->get('college');
			if($colleges->num_rows() > 0){
				return $colleges->result();
			}
		}

		public function chkAdminExist(){
			$chkAdmin = $this->db->where(['role_id' => '1'])->get('users');
			if($chkAdmin->num_rows() > 0){
				return $chkAdmin->num_rows();
			}
		}
		public function adminExist($email,$password){
			$chkAdmin = $this->db->where(['email'=>$email, 'password'=>$password])->get('users');
			if($chkAdmin->num_rows()>0){
				return $chkAdmin->row();
			}
		}
		public function makeCollege($data){
			return $this->db->insert('college',$data);
		}

		public function registerAdmin($data){
			return $this->db->insert('users',$data);
		}
		public function registerCoadmin($data){
			return $this->db->insert('users',$data);
		}

		public function viewAllColleges(){
			$this->db->select(['users.user_id','users.email','college.college_id','users.user_name','users.gender','college.collegename','college.branch','roles.role_name']);
			$this->db->from('college');
			$this->db->join('users','users.college_id = college.college_id');
			$this->db->join('roles','roles.role_id = users.role_id');
			$users = $this->db->get();
			return $users->result();
			
		}
		public function insertStudent($data){
			return $this->db->insert('students',$data);
		}

		public function getStudents($college_id){
			$this->db->select([ 'students.id','students.studentname','college.collegename','students.email','students.gender','students.subject']);
			$this->db->from('students');
			$this->db->join('college','college.college_id = students.college_id');
			$this->db->where(['students.college_id' => $college_id]);
			$students = $this->db->get();
			return $students->result();
		}

		public function getStudentRecord($id){
			$this->db->select(['college.college_id','college.collegename','students.id','students.email','students.gender','students.studentname','students.subject']);
			$this->db->from('students');
			$this->db->join('college','college.college_id = students.college_id');
			$this->db->where(['students.id' => $id]);
			$student = $this->db->get();
			return $student->row();
		}

		public function removeStudent($id){
			return $this->db->delete('students',['id' => $id]);
		}
		
	}

?>