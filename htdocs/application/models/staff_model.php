<?php

class Staff_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Function to return user informtion
     * 
     * @param String Username
     * @return Array of users
     */
    function getStaff()
    {
        $result = $this->db->select('*')->from('staff')->order_by('position')->get();
        return $result->result();
    }

}

