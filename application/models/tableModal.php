<?php
class order extends CI_model {
    function create ($formArray){
    $this->db->insert('company',$formArray);
    }
    function all(){
        return $order =  $this->db->get('products') -> result_array();
    }
}
