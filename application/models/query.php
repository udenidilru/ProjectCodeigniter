<?php
	class query extends CI_Model{

		

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
		
	}

?>