<?php
class SupplierController extends CI_controller{
    function index () {
        $this->load->model('Supplier_model');
        $suppliers = $this->Supplier_model->all();
        $data = array();
        $data['suppliers'] =$suppliers;
        $this->load->view('supplier/supplierScreen',$data);
    }
    function create() {
        $this->load->model('Supplier_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if ($this->form_validation->run()==false){
            $this->load->view('supplier/create');
        }
        else{
            $formArray =array();
            $formArray['name'] =$this -> input -> post('name');
            $formArray['email'] =$this -> input -> post('email');
            $formArray['address'] =$this -> input -> post('address');
            $formArray['phone'] =$this -> input -> post('phone');
            $formArray['item'] =$this -> input -> post('item');
            $this->Supplier_model->create($formArray);
            $this -> session -> set_flashdata('success','Record Added!');
            redirect(base_url().'index.php/SupplierController/index');
        }
    }
    function edit($id)
    {
       $this->load->model('Supplier_model');
       $suppliers=$this->Supplier_model-> getSupplier($id);
       $data =array();
       $data['suppliers']=$suppliers;
       $this->form_validation->set_rules('name','Name','required');
       $this->form_validation->set_rules('email','Email','required|valid_email');
       if ($this->form_validation->run()==false){
           $this->load->view('supplier/edit',$data);
       }else{
        $formArray =array();
        $formArray['name'] =$this -> input -> post('name');
        $formArray['email'] =$this -> input -> post('email');
        $formArray['address'] =$this -> input -> post('address');
        $formArray['phone'] =$this -> input -> post('phone');
        $formArray['item'] =$this -> input -> post('item');
        $this->Supplier_model->updateSupplier($id,$formArray);
        $this -> session -> set_flashdata('success','Record Updated!');
        redirect(base_url().'index.php/SupplierController/index');
       }
    }
    function delete($id) {
        $this->load->model('Supplier_model');
        $this->Supplier_model-> deleteSupplier($id);
        $this -> session -> set_flashdata('success','Record Deleted!');
        redirect(base_url().'index.php/SupplierController/index');
    }
}

