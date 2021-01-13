<?php
class Supplier_model extends CI_model {
    function create ($formArray){
    $this->db->insert('suppliers',$formArray);
    }
    function all(){
        return $suppliers =  $this->db->get('suppliers') -> result_array();
    }
    function getSupplier($id){
        $this->db->where('id',$id);
        return $suppliers =$this->db->get('suppliers')->row_array();
    }
    function updateSupplier($id,$formArray) {
        $this->db->where('id',$id);
        $this->db->update('suppliers',$formArray);
    }
    function deleteSupplier($id){
        $this->db->where('id',$id);
        $this->db->delete('suppliers');
    }
}
?>

