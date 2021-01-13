<?php
class User_model extends CI_model
{
    function create($formArray)
    {
        $this->db->insert('users', $formArray);
    }
    function compare($username, $pwd)
    {
        $this->db->where('pwd', $pwd);
        $this->db->where('username', $username);
        $this->db->limit(1);
        return $user = $this->db->get('users')->row_array();
    }
    // function all(){
    //     return $user =  $this->db->get('user') -> result_array();
    // }
    // function getUser($id){
    //     $this->db->where('id',$id);

    //     return $user =$this->db->get('user')->row_array();
    // }
    // function updateUser($id,$formArray) {
    //     $this->db->where('id',$id);
    //     $this->db->update('user',$formArray);

    // }
    // function userDelete($id){
    //     $this->db->where('id',$id);
    //     $this->db->delete('user');
    // }
}



















