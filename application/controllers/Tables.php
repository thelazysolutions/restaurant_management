<?php
class Tables extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('table_model');
	$this->logged_in();
    }
    function index(){
		$data['seat_tables'] = $this->table_model->get_seated_table();
		$data['res_tables'] = $this->table_model->get_reserved_table();
		$data['emp_tables'] = $this->table_model->get_empty_table();
		$data['empty_count'] = $this->table_model->get_empty_count();
		$data['reserve_count'] = $this->table_model->get_reserve_count();
		$data['seat_count'] = $this->table_model->get_seat_count();
        $this->load->view('table_book',$data);
    }
	 function logged_in(){
        if(! $this->session->userdata('authenticated')){
            redirect(base_url() . 'index.php/UserController');
        }
    }
   
    function table_data(){
        $data=$this->table_model->table_list();
        echo json_encode($data);
    }
     function tablehistory_data(){
        $data=$this->table_model->tablehistory_list();
        echo json_encode($data);
    }
 
    function save(){
        $data=$this->table_model->save_table();
        echo json_encode($data);
    }
 
    function update(){
        $data=$this->table_model->update_table();
        echo json_encode($data);
    }
 
    function delete(){
        $data=$this->table_model->delete_table();
        echo json_encode($data);
    }

    function orders(){
    	$this->load->view("orderScreen");
	}
 
}
?>
