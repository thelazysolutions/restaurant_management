<?php
class CompanyController extends CI_controller
{
    function index()
    {
        $this->load->model('Company_model');
        $companyEmployee = $this->Company_model->allEmployee();
        $company = $this->Company_model->allCompany();
        $data = array();
        $data['companyEmployee'] = $companyEmployee;
        $data['company'] = $company;
        $this->load->view('company/companyScreen', $data);
    }
    
    function createEmployee()
    {
        $this->load->model('Company_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('company/createEmployee');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['designation'] = $this->input->post('designation');
            $formArray['joining_date'] = $this->input->post('joining_date');
            $formArray['dob'] = $this->input->post('dob');
            // $formArray['created_at'] = date('Y-m-d');
            $this->Company_model->create($formArray);
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/CompanyController/index');
        }
    }
    function editEmployee($id)
    {
        $this->load->model('Company_model');
        $companyEmployee = $this->Company_model->getEmployee($id);
        $data = array();
        $data['companyEmployee'] = $companyEmployee;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('company/editEmployee', $data);
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['designation'] = $this->input->post('designation');
            $formArray['joining_date'] = $this->input->post('joining_date');
            $formArray['dob'] = $this->input->post('dob');
            $this->Company_model->updateEmployee($id, $formArray);
            $this->session->set_flashdata('success', 'Record Updated!');
            redirect(base_url() . 'index.php/companycontroller/index');
        }
    }
    function deleteEmployee($id)
    {
        $this->load->model('Company_model');
        $this->Company_model->deleteEmployee($id);
        $this->session->set_flashdata('success', 'Record Deleted!');
        redirect(base_url() . 'index.php/companycontroller/index');
    }
    // company
    function createCompany()
    {
        $this->load->model('Company_model');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('company/createCompany');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['phone'] = $this->input->post('phone');
            $formArray['address'] = $this->input->post('address');
           
            $this->Company_model->createCompany($formArray);
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/CompanyController/index');
        }
    }
    function editCompany($id)
    {
        $this->load->model('Company_model');
        $company = $this->Company_model->getCompany($id);
        $data = array();
        $data['company'] = $company;
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('company/editCompany', $data);
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['address'] = $this->input->post('address');
            $formArray['phone'] = $this->input->post('phone');
            $this->Company_model->updateCompany($id, $formArray);
            $this->session->set_flashdata('success', 'Record Updated!');
            redirect(base_url() . 'index.php/companycontroller/index');
        }
    }
    function deleteCompany($id)
    {
        $this->load->model('Company_model');
        $this->Company_model->deleteCompany($id);
        $this->session->set_flashdata('success', 'Record Deleted!');
        redirect(base_url() . 'index.php/companycontroller/index');
    }
}
