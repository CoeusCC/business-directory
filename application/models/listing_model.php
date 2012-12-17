<?php
class Listing_model extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_listings()
    {
        $query = $this->db->get('members');
        return $query->result();
    }

}