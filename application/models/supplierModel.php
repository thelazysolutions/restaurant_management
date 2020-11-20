<?php 

	class supplierModel extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('suppliers');
                // if (count( $query->result() ) > 0) {
                	return $query->result();
                // }
        }

        public function insert_entry($data)
        {
            return $this->db->insert('suppliers', $data);
        }

        public function delete_entry($id){
        	return $this->db->delete('suppliers', array('id' => $id));
        }

        public function edit_entry($id){
        	$this->db->select("*");
        	$this->db->from("suppliers");
        	$this->db->where("id", $id);
        	$query = $this->db->get();
        	if (count($query->result()) > 0) {
        		return $query->row();
        	}
        }

        public function update_entry($data)
        {
            return $this->db->update('suppliers', $data, array('id' => $data['id']));
        }

}