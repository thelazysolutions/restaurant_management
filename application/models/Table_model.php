<?php
class Table_model extends CI_Model{
 
    function table_list(){
        $hasil=$this->db->get('_table');
        return $hasil->result();
    }
    function tablehistory_list(){
        $hasil=$this->db->get('_tablehistory');
        return $hasil->result();
    }
    function save_table(){
        $data = array(
                'id'  => $this->input->post('id'), 
                'name'  => $this->input->post('name'), 
                'state' => $this->input->post('state'), 
                'status' => $this->input->post('status'), 
                'time_' => $this->input->post('time_'),
		'day'=>$this->input->post('day'),  
            );
        $result=$this->db->insert('_table',$data);
	return $result;
    }
    function update_table()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $state = $this->input->post('state');
        $status = $this->input->post('status');
        $time_ = $this->input->post('time_');
        $day = $this->input->post('day');

        $this->db->set('name', $name);
        $this->db->set('state', $state);
        $this->db->set('status', $status);
        $this->db->set('time_', $time_);
        $this->db->set('day', $day);
        $this->db->where('id', $id);
        $result = $this->db->update('_table');
        if ($state === "seated") {
            $data = array(
                'id'  => $this->input->post('id'),
                'name'  => $this->input->post('name'),
                'state' => $this->input->post('state'),
                'status' => $this->input->post('status'),
                'time_' => $this->input->post('time_'),
                'day' => $this->input->post('day'),
            );
            $this->db->where('id', $data['id']);
            $q = $this->db->get('_tablehistory');
            if ($q->num_rows() > 0) {
                $this->db->where('id', $data['id']);
                $this->db->update('_tablehistory', $data);
            } else {
                $result1 = $this->db->insert('_tablehistory', $data);
            }
        }
        return $result;
    } 
    function delete_table(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('_table');
        return $result;
    }
	
			public function get_empty_count(){
			$this->db->where('state','empty');
			$sql=$this->db->get('_table');
			return $sql->num_rows();
		}
		
			public function get_reserve_count(){
			$this->db->where('state','reserved');
			$sql=$this->db->get('_table');
			return $sql->num_rows();
		}
		
			public function get_seat_count(){
			$this->db->where('state','seated');
			$sql=$this->db->get('_table');
			return $sql->num_rows();
		}
		public function get_seated_table(){
			$this->db->where('state','seated');
			$sql=$this->db->get('_table');
			return $sql->result();
		}

		public function get_reserved_table(){
			$this->db->where('state','reserved');
			$sql=$this->db->get('_table');
			return $sql->result();
		}

		public function get_empty_table(){
			$this->db->where('state','empty');
			$sql=$this->db->get('_table');
			return $sql->result();
		}
     
}
