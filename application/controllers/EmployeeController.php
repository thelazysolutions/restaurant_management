<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->load->model('employeeModel');
		$this->logged_in();
	}
	
	public function index()
	{
		$this->load->view('company/employee');
	}
	function logged_in(){
        if(! $this->session->userdata('authenticated')){
            redirect(base_url() . 'index.php/UserController');
        }
    }

	public function insert()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('designation', 'Designation', 'required');
            $this->form_validation->set_rules('joining_date', 'Joining Date', 'required');
            $this->form_validation->set_rules('dob', 'Birth Date', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$ajax_data = $this->input->post();
				if ($this->employeeModel->insert_entry($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Record added Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to add record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function fetch()
	{
		if ($this->input->is_ajax_request()) {
			$posts = $this->employeeModel->get_entries();
			$data = array('responce' => 'success', 'posts' => $posts);
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function delete()
	{
		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');

			if ($this->employeeModel->delete_entry($del_id)) {
				$data = array('responce' => 'success');
			} else {
				$data = array('responce' => 'error');
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function edit()
	{
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post('edit_id');

			if ($post = $this->employeeModel->edit_entry($edit_id)) {
				$data = array('responce' => 'success', 'post' => $post);
			} else {
				$data = array('responce' => 'error', 'message' => 'failed to fetch record');
			}
			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}

	public function update()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('edit_employeename', 'Name', 'required');
			if ($this->form_validation->run() == FALSE) {
				$data = array('responce' => 'error', 'message' => validation_errors());
			} else {
				$data['id'] = $this->input->post('edit_record_id');
				$data['name'] = $this->input->post('edit_employeename');
                $data['phone'] = $this->input->post('edit_employeephone');
                $data['email'] = $this->input->post('edit_employeeemail');
                $data['designation'] = $this->input->post('edit_employeedesignation');
                $data['joining_date'] = $this->input->post('edit_employeejoining_date');
                $data['dob'] = $this->input->post('edit_employeebirth_date');
				if ($this->employeeModel->update_entry($data)) {
					$data = array('responce' => 'success', 'message' => 'Record update Successfully');
				} else {
					$data = array('responce' => 'error', 'message' => 'Failed to update record');
				}
			}

			echo json_encode($data);
		} else {
			echo "No direct script access allowed";
		}
	}
}