<?php 

	class Company_model extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('company');
                // if (count( $query->result() ) > 0) {
                	return $query->result();
                // }
        }

        public function insert_entry($data)
        {
            return $this->db->insert('company', $data);
        }

        public function delete_entry($id){
        	return $this->db->delete('company', array('id' => $id));
        }

        public function edit_entry($id){
        	$this->db->select("*");
        	$this->db->from("company");
        	$this->db->where("id", $id);
        	$query = $this->db->get();
        	if (count($query->result()) > 0) {
        		return $query->row();
        	}
        }

        public function update_entry($data)
        {
            return $this->db->update('company', $data, array('id' => $data['id']));
        }

}
