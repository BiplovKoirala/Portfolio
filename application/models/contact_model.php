<?php

Class contact_model extends CI_Model {

// Insert registration data in database
	public function send_message()
	{
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'subject'=>$this->input->post('subject'),
			'message'=>$this->input->post('message'),

			);
		$this->db->insert('contact',$data);

		
	}
}
?>