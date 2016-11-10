<?php

/**
 * Created by PhpStorm.
 * User: shubh
 * Date: 11/10/2016
 * Time: 9:11 AM
 */
class sales_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    
}