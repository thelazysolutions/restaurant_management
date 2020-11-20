<?php
class Company_Model extends CI_model {
    function create ($formArray){
    $this->db->insert('employee',$formArray);
    }
    function allEmployee(){
        return $companyEmployee =  $this->db->get('employee') -> result_array();
    }
    function getEmployee($id){
        $this->db->where('id',$id);
        
        return $companyEmployee =$this->db->get('employee')->row_array();
    }
    function updateEmployee($id,$formArray) {
        $this->db->where('id',$id);
        $this->db->update('employee',$formArray);
        
    }
    function deleteEmployee($id){
        $this->db->where('id',$id);
        $this->db->delete('employee');
    }
    // company
    function createCompany ($formArray){
        $this->db->insert('company',$formArray);
        }
        function allCompany(){
            return $company =  $this->db->get('company') -> result_array();
        }
        function getCompany($id){
            $this->db->where('id',$id);
            
            return $company =$this->db->get('company')->row_array();
        }
        function updateCompany($id,$formArray) {
            $this->db->where('id',$id);
            $this->db->update('company',$formArray);
        }
        function deleteCompany($id){
            $this->db->where('id',$id);
            $this->db->delete('company');
        }

}
