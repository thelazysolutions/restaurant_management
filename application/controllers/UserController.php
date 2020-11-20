<?php
class UserController extends CI_controller
{   
    function index()
    {
        $this->load->view('LoginScreen');
    }
    function registerPage()
    {
        $this->load->view('RegisterScreen');
    }
    function login()
    {
        $this->load->model('userModel');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $validation = array();
            $validation['validate'] = true;
            $this->load->view('LoginScreen', $validation);
        } else {
            $formArray = array();
            $username = $this->input->post('email');
            $pwd = $this->input->post('password');
            $user = $this->userModel->compare($username, $pwd);

            if ($user) {
                $userdata = array(
                    'id'=> $user->id,
                    'username'=> $user->username,
                    'pwd'=>$user->pwd,
                    'authenticated'=> TRUE
                );
                $this->session->set_userdata($userdata);
                redirect(base_url() . 'index.php/HomeScreenController/index');
            } else {
               
            $validation['incorrect'] = "<span style='color:red;'>password or email is incorrect</span>";
            $this->load->view('LoginScreen', $validation);
            }
        }
    }
    function create()
    {
        $this->load->model('userModel');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('RegisterScreen');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['username'] = $this->input->post('email');
            $formArray['pwd'] = $this->input->post('password');
            $formArray['user_type'] = $this->input->post('designation');
            $this->userModel->create($formArray);
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/UserController/login');
        }
    }
function logout(){
    $this->session->sess_destroy();
    redirect(base_url() . 'index.php/UserController/login');

}
   
}
