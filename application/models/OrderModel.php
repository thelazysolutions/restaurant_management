<?php
class OrderModel extends CI_model {
    function all(){
        return $order =  $this->db->get('products') -> result_array();
    }
}