<?php
class Product_model extends CI_model {
    function create ($formArray){
    $this->db->insert('products',$formArray);
    }
    function all(){
        return $products =  $this->db->get('products') -> result_array();
    }
    function categories(){
        return $categories =  $this->db->get('category') -> result_array();
    }
    function search($query){
        $this->db->select("*");
        $this->db->from("products");
        if($query != ''){
            $this->db->like('category',$query);
            $this->db->or_like('name',$query);
        }
        return $this->db->get();
    }
    function getProduct($id){
        $this->db->where('id',$id);
        
        return $product =$this->db->get('products')->row_array();
    }
    function update($name,$formArray) {
        $this->db->like('name',$name);
        $this->db->update('products',$formArray);
    }
    function deleteProduct($id){
        $this->db->where('id',$id);
      return $this->db->delete('products');
    }
    // category
    function createCategory($formArray){
        $this->db->insert('category',$formArray);
    }
}
?>

