<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function login($post)
	{
		//var_dump($this->input->post());
		//die();
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("password", "Password", "required");
		//RUN VALIDATIONS
		if($this->form_validation->run() === FALSE)
		{
			//send back errors
			//var_dump(login_errors());
			//die();
			$this->session->set_flashdata("login_errors", validation_errors());
		}
		else{
			$query = "SELECT id FROM users WHERE email = ? AND password = ?";
			$values = array($post["email"], $post["password"]);
			$user = $this->db->query($query, $values)->row_array();

			if(!empty($user))
			{
				// user found
				$this->session->set_userdata("id", $user["id"]);
				return true;
			}
			else{
				//no user found
				$this->session->set_flashdata("login_errors", "<p>Invalid Credentials</p>");
				return false;
			}
		}
	}

	public function register($post)
	{
		//var_dump($post);
		//die();
		$this->form_validation->set_rules("first_name", "First Name", "required|min_length[2]");
		$this->form_validation->set_rules("last_name", "Last Name", "required|min_length[2]");
		$this->form_validation->set_rules("username", "Username", "required|min_length[2]");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]");
		$this->form_validation->set_rules("c_password", "Confirm Password", "required|matches[password]");
		// RUN VALIDATIONS
		if($this->form_validation->run() === FALSE)
		{
			//send back errors
			//var_dump(validation_errors());
			//die();
			$this->session->set_flashdata("registration_errors", validation_errors());
		}
		else{
			//echo "good to go";
			//add the user
			$query = "INSERT INTO users (first_name, last_name, username, email, password, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
			$values = array($post["first_name"], $post["last_name"], $post["username"], $post["email"], $post["password"]);
			$this->db->query($query, $values);
		}


	}
}