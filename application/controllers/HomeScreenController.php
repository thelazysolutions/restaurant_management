<?php
defined('BASEPATH') or exit('No direct script access allowed');
class HomeScreenController extends CI_Controller
{	
	 public function __construct()
	{
        parent::__construct();
        $this->logged_in();
	}

    function index()
    {
        $this->load->view('homeScreen');
    }
function logged_in(){
        if(! $this->session->userdata('authenticated')){
            redirect(base_url() . 'index.php/UserController');
        }
    }
    function table()
    {
        $this->load->view('tableScreen');
    }
    function order()
    {
        $this->load->model('OrderModel');
        $order = $this->OrderModel->all();
        $data = array();
        $data['order'] = $order;
        $this->load->view('orderScreen', $data);
    }
   
   
  
}
