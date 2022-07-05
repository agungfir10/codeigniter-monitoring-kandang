<?php

class Data_model extends CI_Model
{
    private $_table = "data";

    public function get_all_data()
    {
        $query = $this->db->query("SELECT * FROM data ORDER BY Date DESC");
        return $query->result();
    }

    public function get_data()
    {
        $query = $this->db->query("SELECT * FROM data ORDER BY Date DESC LIMIT 1");
        return $query->row();
    }

    public function insert($data)
    {
        if (!$data) {
            return;
        }

        return $this->db->insert($this->_table, $data);
    }

    public function get_all_data_realtime()
    {
        $query = $this->db->query("SELECT * FROM data ORDER BY Date DESC LIMIT 30");
        return $query->result();
    }
}
